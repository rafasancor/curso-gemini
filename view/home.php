<section>
    <h1>Bem-vindo à Plataforma de Cursos Online!</h1>
    <p>Descubra uma variedade de cursos para impulsionar sua carreira e conhecimentos.</p>

    <h2>Cursos em Destaque</h2>
    <?php
    // A variável $featuredCourses agora virá do banco de dados, populada pela index.php
    // Remova o array fictício
    /*
    $featuredCourses = [
        ['nome' => 'PHP Avançado com POO', 'descricao' => 'Aprenda programação orientada a objetos em PHP.', 'preco' => 299.90, 'alunos_matriculados' => 15],
        ['nome' => 'Desenvolvimento Web Fullstack', 'descricao' => 'Domine Frontend e Backend com as últimas tecnologias.', 'preco' => 599.90, 'alunos_matriculados' => 22],
        ['nome' => 'Banco de Dados MySQL para Iniciantes', 'descricao' => 'Crie e gerencie bancos de dados relacionais.', 'preco' => 199.90, 'alunos_matriculados' => 8],
    ];
    */
    ?>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php if (!empty($featuredCourses)): // Verifica se há cursos para exibir ?>
            <?php foreach ($featuredCourses as $courseData): // Itere sobre os dados dos cursos
                $course = $courseData['curso_obj']; // O objeto Curso está dentro de 'curso_obj'
                $alunosMatriculados = $courseData['total_alunos_matriculados'] ?? 0; // Obtém o número de alunos matriculados
            ?>
                <div style="border: 1px solid #ccc; padding: 15px; width: 300px; border-radius: 8px;">
                    <h3><?= htmlspecialchars($course->getNome()) ?></h3>
                    <p><?= htmlspecialchars($course->getDescricao()) ?></p>
                    <p><strong>Preço:</strong> R$ <?= number_format($course->getPreco(), 2, ',', '.') ?></p>
                    <p><small>Alunos matriculados: <?= htmlspecialchars($alunosMatriculados) ?></small></p>
                    <a href="?p=cursos" style="background-color: #007bff; color: white; padding: 8px 12px; text-decoration: none; border-radius: 5px;">Ver Detalhes</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum curso em destaque disponível no momento.</p>
        <?php endif; ?>
    </div>
</section>