<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title><?php $title='Первая страница'; echo $title;?></title>
</head>
<body>
    <div class="wraper">
        <header>
            <h1 class="naming">Один</h2>
            <nav>
            <ul>
                <li>
                        <a href="<?php  
                                    $name='Первая страница'; 
                                    $link='index.php'; 
                                    $current_page=true;
                                    echo $link; 
                                    ?>"
                                    <?php
                                    if( $current_page ) 
                                    echo ' class="selected_menu"'; 
                                    echo '>';
                                    echo $name; 
                                    ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php 
                                    $name='Вторая страница'; 
                                    $link='page2.php'; 
                                    $current_page=false;
                                    echo $link; 
                                    ?>"
                                    <?php
                                    if( $current_page ) 
                                    echo ' class="selected_menu"'; 
                                    echo '>';
                                    echo $name; 
                                    ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php 
                                    $name='Третья страница'; 
                                    $link='page3.php'; 
                                    $current_page=false;
                                    echo $link; 
                                    ?>"
                                    <?php
                                    if( $current_page ) 
                                    echo ' class="selected_menu"'; 
                                    echo '>';
                                    echo $name; 
                                    ?>
                        </a>
                    </li>
                  </ul>
            </nav>
        </header>
        <main>
            <section id="direction" >
                <div class='element'>
                    <?php echo '<img src="img/foto'.(date('s') % 2+1).'.webp" alt="Меняющаяся фотография">'; ?>
                    <hr>
                    <h2>The first</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
                <div class='element'>
                    <img src="img/three.jpg" />
                    <hr>
                    <h2>The Second</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
                <div class='element'>
                    <img src="img/three.jpg" />
                    <hr>
                    <h2>The Third</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
                <div class='element'>
                    <img src="img/three.jpg" />
                    <hr>
                    <h2>The Fourth</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
            </section>
            <button id="change">Change derection</button>
            <section id="order">
                <div class='element'>
                    <img src="img/three.jpg" />
                    <hr>
                    <h2>The first</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
                <div class='element order'>
                    <img src="img/three.jpg" />
                    <hr>
                    <h2>The Second</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
                <div class='element alignSelf'>
                    <img src="img/three.jpg" />
                    <hr>
                    <h2>The Third</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
                <div class='element order'>
                    <img src="img/three.jpg" />
                    <hr>
                    <h2>The Fourth</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
            </section>
            <h2 class="self">alignSelf</h2>
            <section id="self">
                <div class='element alignSelf'>
                    <img src="img/three.jpg" />
                    <hr>
                    <h2>The first</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nulla dolore autem suscipit voluptate, libero saepe natus minima dolorum numquam illo id, laudantium quasi? Ut eveniet fuga beatae harum non.</p>
                </div>
            </section>
            <section>
                <h2 class="self">Table</h2>
                <table>
                    <tr>
                        <th>Слолбик 1</th>
                        <th>Слолбик 2</th>
                    </tr>
                    <?php echo '
                    <tr>
                        <td>Ячейка 1</td>
                        <td>Ячейка 2</td>
                    </tr>';
                    ?>
                    <tr>
                        <td><?php echo 'Ячейка 3'; ?></td>
                        <td><?php echo 'Ячейка 4'; ?></td>
                    </tr>
                    <tr>
                        <td>Ячейка 5</td>
                        <td>Ячейка 6</td>
                    </tr>
                </table>
            </section>
        </main>
        <footer>
            <p>Сформировано <?php echo date('d.m.Y в H-i:s')?></p>
        </footer>
    </div>
    <script src="change.js"></script>
</body>
</html>