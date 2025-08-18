<?php 
$title = 'Usuários - Sistema de Usuários'; 
$page = 'users';
//$basePath = '/aulas/repo-pw/pw3/POO/app-poo/project-app/public';
?>
<div class="row">
    <div class="col-12">
        <h1>👥 Gerenciamento de Usuários</h1>
        
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Lista de Usuários</h3>
            <a href="/users/create" class="btn btn-primary">➕ Adicionar Usuário</a>
        </div>
        
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Administrador</td>
                                <td>admin@sistema.com</td>
                                <td><span class="badge bg-success">Ativo</span></td>
                                <td>
                                    <a href="/users/edit/1" class="btn btn-sm btn-outline-primary">✏️ Editar</a>
                                    <a href="/users/delete/1" class="btn btn-sm btn-outline-danger">🗑️ Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Usuário Comum</td>
                                <td>usuario@sistema.com</td>
                                <td><span class="badge bg-success">Ativo</span></td>
                                <td>
                                    <a href="/users/edit/2" class="btn btn-sm btn-outline-primary">✏️ Editar</a>
                                    <a href="/users/delete/2" class="btn btn-sm btn-outline-danger">🗑️ Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>