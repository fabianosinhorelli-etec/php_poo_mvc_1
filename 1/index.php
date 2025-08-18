<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Usuários - MVC</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --success-color: #4cc9f0;
            --light-bg: #f8f9fa;
            --dark-text: #212529;
        }
        
        body {
            background-color: var(--light-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        
        .card-custom:hover {
            transform: translateY(-5px);
        }
        
        .btn-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: 600;
        }
        
        .btn-custom:hover {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            transform: scale(1.05);
        }
        
        .form-control-custom {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
        }
        
        .form-control-custom:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        .table-custom thead {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }
        
        .table-custom tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
        }
        
        .modal-content {
            border-radius: 15px;
            border: none;
        }
        
        .alert-custom {
            border-radius: 10px;
            border: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">
                <i class="bi bi-people-fill me-2"></i>Sistema MVC
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" onclick="showSection('dashboard')">
                            <i class="bi bi-speedometer2 me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" onclick="showSection('users')">
                            <i class="bi bi-person-lines-fill me-1"></i>Usuários
                        </a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <div class="user-avatar me-3">US</div>
                    <span class="text-white me-3">Usuário Admin</span>
                    <button class="btn btn-outline-light btn-sm" onclick="logout()">
                        <i class="bi bi-box-arrow-right me-1"></i>Sair
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Dashboard Section -->
        <div id="dashboard-section">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-primary">Dashboard</h2>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center">
                            <div class="display-4 text-primary mb-3">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h5>Total de Usuários</h5>
                            <h2 class="text-primary fw-bold">150</h2>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center">
                            <div class="display-4 text-success mb-3">
                                <i class="bi bi-person-check-fill"></i>
                            </div>
                            <h5>Usuários Ativos</h5>
                            <h2 class="text-success fw-bold">142</h2>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-body text-center">
                            <div class="display-4 text-warning mb-3">
                                <i class="bi bi-person-x-fill"></i>
                            </div>
                            <h5>Usuários Inativos</h5>
                            <h2 class="text-warning fw-bold">8</h2>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Últimos Usuários Cadastrados</h5>
                            <div class="table-responsive">
                                <table class="table table-custom">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Data de Criação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>150</td>
                                            <td>Maria Silva</td>
                                            <td>maria@email.com</td>
                                            <td><span class="badge bg-success">Ativo</span></td>
                                            <td>15/10/2023</td>
                                        </tr>
                                        <tr>
                                            <td>149</td>
                                            <td>João Santos</td>
                                            <td>joao@email.com</td>
                                            <td><span class="badge bg-success">Ativo</span></td>
                                            <td>14/10/2023</td>
                                        </tr>
                                        <tr>
                                            <td>148</td>
                                            <td>Ana Costa</td>
                                            <td>ana@email.com</td>
                                            <td><span class="badge bg-warning">Inativo</span></td>
                                            <td>12/10/2023</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Section -->
        <div id="users-section" style="display: none;">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-primary">Gerenciamento de Usuários</h2>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-12">
                    <button class="btn btn-custom" onclick="showUserModal()">
                        <i class="bi bi-person-plus-fill me-2"></i>Adicionar Novo Usuário
                    </button>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card card-custom">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-custom">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Permissão</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Administrador</td>
                                            <td>admin@sistema.com</td>
                                            <td><span class="badge bg-success">Ativo</span></td>
                                            <td>Admin</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1" onclick="editUser(1)">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" onclick="deleteUser(1)">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Usuário Comum</td>
                                            <td>usuario@sistema.com</td>
                                            <td><span class="badge bg-success">Ativo</span></td>
                                            <td>Usuário</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1" onclick="editUser(2)">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" onclick="deleteUser(2)">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Usuário Inativo</td>
                                            <td>inativo@sistema.com</td>
                                            <td><span class="badge bg-warning">Inativo</span></td>
                                            <td>Usuário</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary me-1" onclick="editUser(3)">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" onclick="deleteUser(3)">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login Section -->
        <div id="login-section">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card card-custom">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <div class="display-4 text-primary mb-3">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <h3 class="fw-bold text-primary">Acesso ao Sistema</h3>
                                <p class="text-muted">Entre com suas credenciais</p>
                            </div>
                            
                            <form id="loginForm">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-custom" id="email" placeholder="seu@email.com" required>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="password" class="form-label">Senha</label>
                                    <input type="password" class="form-control form-control-custom" id="password" placeholder="••••••••" required>
                                </div>
                                
                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-custom">
                                        <i class="bi bi-box-arrow-in-right me-2"></i>Entrar
                                    </button>
                                </div>
                                
                                <div class="text-center">
                                    <a href="#" class="text-decoration-none">Esqueceu sua senha?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Modal -->
    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">Adicionar Usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                        <input type="hidden" id="userId">
                        <div class="mb-3">
                            <label for="userName" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control form-control-custom" id="userName" required>
                        </div>
                        <div class="mb-3">
                            <label for="userEmail" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-custom" id="userEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="userPassword" class="form-label">Senha</label>
                            <input type="password" class="form-control form-control-custom" id="userPassword">
                        </div>
                        <div class="mb-3">
                            <label for="userStatus" class="form-label">Status</label>
                            <select class="form-select form-control-custom" id="userStatus">
                                <option value="ativo">Ativo</option>
                                <option value="inativo">Inativo</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="userPermission" class="form-label">Permissão</label>
                            <select class="form-select form-control-custom" id="userPermission">
                                <option value="usuario">Usuário</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-custom" onclick="saveUser()">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Simulação de autenticação
        let isAuthenticated = false;
        let currentUser = null;
        
        // Mostrar/Ocultar seções
        function showSection(section) {
            document.getElementById('dashboard-section').style.display = 'none';
            document.getElementById('users-section').style.display = 'none';
            
            if (section === 'dashboard') {
                document.getElementById('dashboard-section').style.display = 'block';
            } else if (section === 'users') {
                document.getElementById('users-section').style.display = 'block';
            }
        }
        
        // Mostrar modal de usuário
        function showUserModal() {
            document.getElementById('userModalLabel').textContent = 'Adicionar Usuário';
            document.getElementById('userForm').reset();
            document.getElementById('userId').value = '';
            new bootstrap.Modal(document.getElementById('userModal')).show();
        }
        
        // Editar usuário
        function editUser(id) {
            document.getElementById('userModalLabel').textContent = 'Editar Usuário';
            document.getElementById('userId').value = id;
            document.getElementById('userName').value = 'Usuário ' + id;
            document.getElementById('userEmail').value = 'usuario' + id + '@sistema.com';
            document.getElementById('userPassword').value = '';
            new bootstrap.Modal(document.getElementById('userModal')).show();
        }
        
        // Excluir usuário
        function deleteUser(id) {
            if (confirm('Tem certeza que deseja excluir este usuário?')) {
                alert('Usuário excluído com sucesso!');
            }
        }
        
        // Salvar usuário
        function saveUser() {
            alert('Usuário salvo com sucesso!');
            bootstrap.Modal.getInstance(document.getElementById('userModal')).hide();
        }
        
        // Logout
        function logout() {
            isAuthenticated = false;
            currentUser = null;
            document.getElementById('login-section').style.display = 'block';
            document.getElementById('dashboard-section').style.display = 'none';
            document.getElementById('users-section').style.display = 'none';
        }
        
        // Login
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Simulação de autenticação
            if (email && password) {
                isAuthenticated = true;
                currentUser = { email: email, name: 'Usuário' };
                
                document.getElementById('login-section').style.display = 'none';
                document.getElementById('dashboard-section').style.display = 'block';
                
                alert('Login realizado com sucesso!');
            } else {
                alert('Por favor, preencha todos os campos!');
            }
        });
        
        // Inicialização
        document.addEventListener('DOMContentLoaded', function() {
            // Verificar se usuário está autenticado
            if (!isAuthenticated) {
                document.getElementById('login-section').style.display = 'block';
                document.getElementById('dashboard-section').style.display = 'none';
                document.getElementById('users-section').style.display = 'none';
            } else {
                document.getElementById('login-section').style.display = 'none';
                document.getElementById('dashboard-section').style.display = 'block';
            }
        });
    </script>
</body>
</html>