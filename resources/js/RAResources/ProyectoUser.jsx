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
import { useMediaQuery } from '@mui/material';

const proyectoUserFilters = [
    <TextInput source="q" label="Search" alwaysOn />,
];

export const ProyectoUserList = () => {
    const isSmall = useMediaQuery((theme) => theme.breakpoints.down('sm'));
    return (
        <List filters={proyectoUserFilters} >

            <Datagrid bulkActionButtons={false}>
                <ReferenceField source="proyecto_id" reference="proyectos" >
                    <TextField source="nombre" />
                </ReferenceField>
                <ReferenceField source="user_id" reference="users" >
                    <TextField source="first_name" />
                </ReferenceField>
            </Datagrid>
        </List>
    );
}

export const ProyectoUserCreate = () => (

    <Create>
        <SimpleForm>
            <ReferenceInput source="proyecto_id" reference="proyectos" >
                <SelectInput optionText="nombre" />
            </ReferenceInput>
            <ReferenceInput source="user_id" reference="students" >
                <SelectInput optionText="first_name" />
            </ReferenceInput>
        </SimpleForm>
    </Create>
);



