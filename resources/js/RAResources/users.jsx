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
    FunctionField
} from 'react-admin';

import { useRecordContext } from 'react-admin';
import { Link } from 'react-router-dom';
import { useMediaQuery } from '@mui/material';

const userFilters = [
    <TextInput source="q" label="Search" alwaysOn />,
];

const convertirValor = (record) => {
    return record.isTeacher === 1 ? 'Profesor' : 'Alumno';
};

const curriculoField = (user) => {
    const curriculoShowPage = user.curriculo?.id ? `/curriculos/${user.curriculo.id}/show` : ''
    const curriculoText = user.curriculo?.id ? `Ver` : ''

    return <Link to={curriculoShowPage}>{curriculoText}</Link>;
};


export const UserList = () => {
    const isSmall = useMediaQuery((theme) => theme.breakpoints.down('sm'));
    return (
        <List filters={userFilters} >
            {isSmall ? (
                <SimpleList
                    primaryText="%{first_name}"
                    secondaryText={(record) => record.email}
                    tertiaryText="%{docente}"
                    linkType={(record) => (record.canEdit ? 'edit' : 'show')}
                >
                    <EditButton />
                </SimpleList>
            ) : (
                <Datagrid bulkActionButtons={false}>
                    <TextField source="id" />
                    <TextField source="first_name" />
                    <TextField source="last_name" />
                    <TextField source="email" />
                    <FunctionField
                        source="isTeacher"
                        label="Rol"
                        render={convertirValor}
                    />
                    <FunctionField
                        label="Currículo"
                        render={curriculoField}/>
                    <EditButton />
                </Datagrid>
            )}
        </List>
    );
}

const UserTitle = () => {
    const record = useRecordContext();
    return <span>User {record ? `"${record.first_name}"` : ''}</span>;
};

export const UserEdit = () => (
    <Edit title={<UserTitle />}>
        <SimpleForm>
            <TextInput source="id" disabled />
            <TextInput source="first_name" />
            <TextInput source="email" />
            <TextInput source="proyectos" />
            <SelectInput source="isTeacher" choices={[
                { id: 1, name: 'Sí' },
                { id: 0, name: 'No' }
            ]} />
        </SimpleForm>
    </Edit>
);

