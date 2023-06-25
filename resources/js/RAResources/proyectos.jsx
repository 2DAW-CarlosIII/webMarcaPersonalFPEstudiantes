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
    FileInput, FileField
} from 'react-admin';

import { useRecordContext } from 'react-admin';
import { useMediaQuery } from '@mui/material';

const proyectoFilters = [
    <TextInput source="q" label="Search" alwaysOn />,
    <ReferenceInput source="docente_id" label="User" reference="users" />
];

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
                    <TextField source="familia" />
                    <TextField source="descripcion" />
                    <TextField source="ciclo" />
                    <EditButton />
                </Datagrid>
            )}
        </List>
    );
}

const ProyectoTitle = () => {
    const record = useRecordContext();
    return <span>Proyecto {record ? `"${record.nombre}"` : ''}</span>;
};

export const ProyectoEdit = () => (
    <Edit title={<ProyectoTitle />}>
        <SimpleForm>
            <TextInput source="id" disabled />
            <ReferenceInput source="docente_id" reference="teachers" >
                <SelectInput optionText="first_name" />
            </ReferenceInput>
            <TextInput source="nombre" />
            <TextInput source="metadatos" />
            <SelectInput source="familia" choices={[
                { id: 'informatica y comunicaciones', name: 'Informática' },
                { id: 'comercio y marketing', name: 'Comercio' },
                { id: 'administracion y gestion', name: 'Administración' },
            ]} />
            <TextInput source="url_github" />
            <TextInput source="descripcion" />
            <SelectInput source="ciclo" choices={[
                { id: 'Gestión administrativa', name: 'Gestión administrativa' },
                { id: 'Administración y finanzas', name: 'Administración y finanzas' },
                { id: 'Asistencia a la dirección', name: 'Asistencia a la dirección' },
                { id: 'Actividades comerciales', name: 'Actividades comerciales' },
                { id: 'Comercio internacional', name: 'Comercio internacional' },
                { id: 'Transporte y logística', name: 'Transporte y logística' },
                { id: 'Marketing y publicidad', name: 'Marketing y publicidad' },
                { id: 'Sistemas microinformáticos y redes', name: 'Sistemas microinformáticos y redes' },
                { id: 'Administración de sistemas informáticos en red', name: 'Administración de sistemas informáticos en red' },
                { id: 'Desarrollo de aplicaciones web', name: 'Desarrollo de aplicaciones web' },
                { id: 'Desarrollo de aplicaciones multiplataforma', name: 'Desarrollo de aplicaciones multiplataforma' }
            ]} />
            <FileInput source="repozip" label="Archivo comprimido con el proyecto">
                <FileField source="src" title="title" />
            </FileInput>
        </SimpleForm>
    </Edit>
);

export const ProyectoCreate = () => (
    <Create>
        <SimpleForm>
            <ReferenceInput source="docente_id" reference="teachers" >
                <SelectInput optionText="first_name" />
            </ReferenceInput>
            <TextInput source="nombre" />
            <TextInput source="metadatos" />
            <SelectInput source="familia" choices={[
                { id: 'informatica y comunicaciones', name: 'Informática' },
                { id: 'comercio y marketing', name: 'Comercio' },
                { id: 'administracion y gestion', name: 'Administración' },
            ]} />
            <TextInput source="url_github" />
            <TextInput source="descripcion" />
            <SelectInput source="ciclo" choices={[
                { id: 'Gestión administrativa', name: 'Gestión administrativa' },
                { id: 'Administración y finanzas', name: 'Administración y finanzas' },
                { id: 'Asistencia a la dirección', name: 'Asistencia a la dirección' },
                { id: 'Actividades comerciales', name: 'Actividades comerciales' },
                { id: 'Comercio internacional', name: 'Comercio internacional' },
                { id: 'Transporte y logística', name: 'Transporte y logística' },
                { id: 'Marketing y publicidad', name: 'Marketing y publicidad' },
                { id: 'Sistemas microinformáticos y redes', name: 'Sistemas microinformáticos y redes' },
                { id: 'Administración de sistemas informáticos en red', name: 'Administración de sistemas informáticos en red' },
                { id: 'Desarrollo de aplicaciones web', name: 'Desarrollo de aplicaciones web' },
                { id: 'Desarrollo de aplicaciones multiplataforma', name: 'Desarrollo de aplicaciones multiplataforma' }
            ]} />
        </SimpleForm>
    </Create>
);
