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
    TextInput
} from 'react-admin';

import { useRecordContext } from 'react-admin';
import { useMediaQuery } from '@mui/material';

const userFilters = [
    <TextInput source="q" label="Search" alwaysOn />,
];

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
                    <TextField source="proyectos" />
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
        </SimpleForm>
    </Edit>
);

