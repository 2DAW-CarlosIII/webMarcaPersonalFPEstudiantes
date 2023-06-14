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

import { useRecordContext} from 'react-admin';
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
          primaryText="%{nombre}"
          secondaryText={(record) => record.metadatos}
          tertiaryText="%{url_github}"
          linkType={(record) => (record.canEdit ? 'edit' : 'show')}
        >
          <EditButton />
        </SimpleList>
      ) : (
        <Datagrid bulkActionButtons={false}>
          <TextField source="id" />
          <ReferenceField source="docente_id" reference="users" />
          <TextField source="nombre" />
          <TextField source="metadatos" />
          <TextField source="url_github" />
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
        <ReferenceInput source="docente_id" reference="users" />
        <TextInput source="nombre" />
        <TextInput source="metadatos" />
        <TextInput source="url_github" />
    </SimpleForm>
    </Edit>
);

export const ProyectoCreate = () => (
    <Create>
        <SimpleForm>
          <ReferenceInput source="docente_id" reference="users" />
          <TextInput source="nombre" />
          <TextInput source="metadatos" />
          <TextInput source="url_github" />
        </SimpleForm>
    </Create>
    );
