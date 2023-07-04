import {
    List,
    SimpleList,
    Datagrid,
    TextField,
    ReferenceField,
    EditButton,
    Edit,
    Create,
    SimpleForm,
    ReferenceInput,
    TextInput,
    SelectInput,
    FileInput, FileField,
    useGetList, useGetOne,
} from 'react-admin';

import { useRecordContext } from 'react-admin';
import { useMediaQuery } from '@mui/material';
import { useWatch } from 'react-hook-form';

const proyectoFilters = [
    <TextInput source="q" label="Search" alwaysOn />,
    <ReferenceInput source="docente_id" label="User" reference="users" />
];

const ProyectoTitle = () => {
    const record = useRecordContext();
    return <span>Proyecto {record ? `"${record.nombre}"` : ''}</span>;
};

const FamiliaInput = props => {
    const {data:familiasProfesionales, isLoading:cargandoFamilias} = useGetList(
        'familias',
        {
            pagination: { page: 1, perPage: 100 },
            sort: { field: 'nombre', order: 'ASC' },
        }
    )
    return (
        <SelectInput
            source="familia_id"
            choices={familiasProfesionales ? familiasProfesionales : []}
            optionText="nombre"
            optionValue="id"
            isLoading={cargandoFamilias}
            {...props}
        />
    );
};

const CicloInput = props => {
    const familia_id = useWatch({ name: 'familia_id' });
    const {data:familiaProfesional, isLoading:cargandoCiclosFamilia} = useGetOne(
        'familias',
        { id: familia_id},
        {
            pagination: { page: 1, perPage: 100 },
            sort: { field: 'nombre', order: 'ASC' },
        }
    )
    return (
        <SelectInput
            source="ciclo_id"
            choices={familiaProfesional ? familiaProfesional.ciclos : []}
            optionText="nombre"
            optionValue="id"
            isLoading={cargandoCiclosFamilia}
            {...props}
        />
    );
};

export const ProyectoList = () => {
    const isSmall = useMediaQuery((theme) => theme.breakpoints.down('sm'));
    return (
        <List filters={proyectoFilters} >
            {isSmall ? (
                <SimpleList
                    primaryText="%{nombre"
                    secondaryText={(record) => record.metadatos}
                    tertiaryText="%{url_github}"
                    linkType={(record) => (record.canEdit ? 'edit' : 'show')}
                >
                    <EditButton />
                </SimpleList>
            ) : (
                <Datagrid bulkActionButtons={false}>
                    <TextField source="id" />
                    <ReferenceField source="docente_id" reference="users">
                        <TextField source="first_name" />
                    </ReferenceField>
                    <TextField source="nombre" />
                    <TextField source="metadatos" />
                    <TextField source="url_github" />
                    <TextField source="descripcion" />
                    <ReferenceField source="ciclo_id" reference="ciclos">
                        <TextField source="nombre" />
                    </ReferenceField>
                    <EditButton />
                </Datagrid>
            )}
        </List>
    );
}

export const ProyectoEdit = () => {
    return (
    <Edit title={<ProyectoTitle />}>
        <SimpleForm>
            <TextInput source="id" disabled />
            <ReferenceInput source="docente_id" reference="teachers" >
                <SelectInput optionText="first_name" />
            </ReferenceInput>
            <TextInput source="nombre" />
            <TextInput source="metadatos" />
            <TextInput source="url_github" />
            <TextInput source="descripcion" />
            <ReferenceInput source="ciclo_id" reference="ciclos" perPage={200} sort={{field: "familia_id"}}>
                <SelectInput optionText="nombre" />
            </ReferenceInput>
            <FileInput source="repozip" label="Archivo comprimido con el proyecto">
                <FileField source="src" title="title" accept="application/zip" />
            </FileInput>
        </SimpleForm>
    </Edit>
);
    }

export const ProyectoCreate = () => (
    <Create>
        <SimpleForm>
            <ReferenceInput source="docente_id" reference="teachers" >
                <SelectInput optionText="first_name" />
            </ReferenceInput>
            <TextInput source="nombre" />
            <TextInput source="metadatos" />
            <TextInput source="url_github" />
            <TextInput source="descripcion" />
            <FamiliaInput />
            <CicloInput />
        </SimpleForm>
    </Create>
);
