import { Admin, Resource, ListGuesser } from "react-admin";
import { dataProvider } from '@/Providers/dataProvider'
import { authProvider } from '@/Providers/authProvider'
import { ProyectoList, ProyectoCreate, ProyectoEdit } from '../RAResources/proyectos';
import { ProyectoUserList, ProyectoUserCreate } from "@/RAResources/ProyectoUser";
import { UserList, UserEdit } from '../RAResources/users';
import loginPage from '@/Pages/Auth/Login';
import jsonServerProvider from 'ra-data-json-server';
import ProyectosIcon from '@mui/icons-material/NoteAlt';
import UsersIcon from '@mui/icons-material/AccountCircle';

//const dataProvider = jsonServerProvider('http://localhost/api/records');

const Dasboard = () => (
  <Admin
    dataProvider={dataProvider}
    authProvider={authProvider}
    loginPage={loginPage}
    basename="/dashboard"
  >
    <Resource name="proyectos" list={ProyectoList} edit={ProyectoEdit} create={ProyectoCreate} icon={ProyectosIcon}/>
    <Resource name="users" list={UserList} edit={UserEdit} icon={UsersIcon} />
    <Resource name="proyectouser" list={ProyectoUserList} create={ProyectoUserCreate} options={{label: "Proyectos por alumno"}}/>

  </Admin>
);

export default Dasboard;
/*
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">You're logged in!</div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
*/
