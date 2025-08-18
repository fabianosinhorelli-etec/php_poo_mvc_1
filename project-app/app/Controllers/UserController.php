<?php
/**
 * Controlador de Usuários
 */

declare(strict_types=1);

namespace App\Controllers;

class UserController extends BaseController 
{
    /**
     * Mostra a lista de usuários
     * @return void
     */
    public function index(): void 
    {
        $this->render('users');
    }
    
    /**
     * Mostra formulário de criação
     * @return void
     */
    public function create(): void 
    {
        echo "<div class='container mt-4'><h1>Formulário de Criação de Usuário</h1>";
        echo "<p>Esta página ainda será implementada...</p>";
        echo "<a href='/aulas/repo-pw/pw3/POO/app-poo/project-app/public/users' class='btn btn-primary'>Voltar</a></div>";
    }
    
    /**
     * Mostra formulário de edição
     * @param int $id ID do usuário
     * @return void
     */
    public function edit(int $id): void 
    {
        echo "<div class='container mt-4'><h1>Editar Usuário ID: " . $id . "</h1>";
        echo "<p>Esta página ainda será implementada...</p>";
        echo "<a href='/aulas/repo-pw/pw3/POO/app-poo/project-app/public/users' class='btn btn-primary'>Voltar</a></div>";
    }
    
    /**
     * Salva usuário (criar ou atualizar)
     * @return void
     */
    public function save(): void 
    {
        echo "<div class='container mt-4'><h1>Usuário salvo!</h1>";
        echo "<a href='/aulas/repo-pw/pw3/POO/app-poo/project-app/public/users' class='btn btn-primary'>Voltar para usuários</a></div>";
    }
    
    /**
     * Deleta usuário
     * @param int $id ID do usuário
     * @return void
     */
    public function delete(int $id): void 
    {
        echo "<div class='container mt-4'><h1>Usuário ID: " . $id . " deletado!</h1>";
        echo "<a href='/aulas/repo-pw/pw3/POO/app-poo/project-app/public/users' class='btn btn-primary'>Voltar para usuários</a></div>";
    }
}
?>