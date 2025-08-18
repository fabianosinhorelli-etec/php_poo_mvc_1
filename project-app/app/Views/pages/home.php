<?php 
$title = 'Home - Sistema de Usuários'; 
$page = 'home';
$basePath = '/aulas/repo-pw/pw3/POO/app-poo/project-app/public';
?>
<div class="row">
    <div class="col-12">
        <h1>🏠 Página Inicial</h1>
        <div class="card">
            <div class="card-body">
                <h5>Bem-vindo ao Sistema de Usuários</h5>
                <p>Este é o nosso sistema usando o padrão MVC (Model-View-Controller).</p>
                
                <div class="alert alert-success">
                    <strong>✅ Padrão MVC Implementado!</strong><br>
                    <strong>Model:</strong> Responsável pelos dados (ainda será implementado)<br>
                    <strong>View:</strong> Responsável pela apresentação (esta página)<br>
                    <strong>Controller:</strong> Responsável pela lógica (controladores)
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5>👥 Usuários</h5>
                                <p>Gerencie os usuários do sistema</p>
                                <a href="<?php echo $basePath; ?>/users" class="btn btn-primary">Acessar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5>🔐 Login</h5>
                                <p>Acesse sua conta</p>
                                <a href="<?php echo $basePath; ?>/login" class="btn btn-success">Entrar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5>📊 Dashboard</h5>
                                <p>Visão geral do sistema</p>
                                <button class="btn btn-info">Visualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>