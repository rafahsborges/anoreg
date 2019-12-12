<h1>Listagem de Usuários</h1>

<a href="/add">Adicionar Usuário</a>

<?php if (count($cartorios) > 0): ?>

    <table width="50%" border="1" cellpadding="2" cellspacing="0">

        <thead>

        <tr>

            <th>Nome</th>


            <th>Email</th>


            <th>Gênero</th>


            <th>Nascimento</th>


            <th>Idade</th>


            <th>Ações</th>

        </tr>

        </thead>


        <tbody>
        <?php foreach ($cartorios as $cartorio): ?>

            <tr>

                <td><?php echo $cartorio['name']; ?></td>


                <td><?php echo $cartorio['email']; ?></td>


                <td><?php echo $cartorio['gender'] == 'm' ? 'Masculino' : 'Feminino'; ?></td>


                <td><?php echo dateConvert($cartorio['birthdate']); ?></td>


                <td><?php echo calculateAge($cartorio['birthdate']); ?> anos</td>


                <td>
                    <a href="/edit/<?php echo $cartorio['id']; ?>">Editar</a>
                    <a href="/remove/<?php echo $cartorio['id']; ?>"
                       onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
                </td>

            </tr>

        <?php endforeach; ?>
        </tbody>

    </table>

<?php else: ?>

    Nenhum usuário cadastrado

<?php endif; ?>