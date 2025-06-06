<section>
    <h1>Bem-vindo à Plataforma de Cursos Online!</h1>
    <p>Descubra uma variedade de cursos para impulsionar sua carreira e conhecimentos.</p>

    <h2>Cursos em Destaque</h2>
    <?php
    // In a real application, you would fetch featured courses from the database.
    // For now, let's simulate a few featured courses.
    $featuredCourses = [
        ['nome' => 'PHP Avançado com POO', 'descricao' => 'Aprenda programação orientada a objetos em PHP.', 'preco' => 299.90, 'alunos_matriculados' => 15],
        ['nome' => 'Desenvolvimento Web Fullstack', 'descricao' => 'Domine Frontend e Backend com as últimas tecnologias.', 'preco' => 599.90, 'alunos_matriculados' => 22],
        ['nome' => 'Banco de Dados MySQL para Iniciantes', 'descricao' => 'Crie e gerencie bancos de dados relacionais.', 'preco' => 199.90, 'alunos_matriculados' => 8],
    ];
    ?>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php foreach ($featuredCourses as $course): ?>
            <div style="border: 1px solid #ccc; padding: 15px; width: 300px; border-radius: 8px;">
                <h3><?= htmlspecialchars($course['nome']) ?></h3>
                <p><?= htmlspecialchars($course['descricao']) ?></p>
                <p><strong>Preço:</strong> R$ <?= number_format($course['preco'], 2, ',', '.') ?></p>
                <p><small>Alunos matriculados: <?= $course['alunos_matriculados'] ?></small></p>
                <a href="?p=cursos" style="background-color: #007bff; color: white; padding: 8px 12px; text-decoration: none; border-radius: 5px;">Ver Detalhes</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>