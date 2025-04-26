<?php

$posts = [
    [
        "User" => "San!",
        "title" => "PHP Errors",
        "content" => "The most common PHP error is the undefined variable error. This error occurs when you try to use a variable that has not been declared or initialized. To fix this error, you need to make sure that you have declared and initialized the variable before you try to use it. For example, if you are trying to use a variable in a loop, you need to make sure that the variable is declared and initialized before you start the loop. If you are trying to use a variable in a function, you need to make sure that the variable is declared and initialized before you call the function. This error is easy to fix, but it can be difficult to find if you are not paying attention to the code that you are writing.",
        "category" => "PHP",
        "content2" => "Another common PHP error is the unexpected T_STRING error. This error occurs when the PHP interpreter finds a string of characters that it does not expect. This can happen for a number of reasons, such as a missing semi-colon, a missing bracket, or a missing quote. To fix this error, you need to find the line of code where the error is happening and check to make sure that all the brackets and quotes are properly closed. If you are still having trouble finding the error, you can try breaking up the code into smaller sections and checking each section individually. This error is also easy to fix, but it can be frustrating if you are not paying attention to the code that you are writing.",
        "date" => "2025-04-25",
        "photo" => "codePHP.png"
    ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="header">
        <span class="Logo">Blog.San</span>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Project</a></li>
            </ul>
        </nav>
    </header>
    <section class="promotion">
        <div class="promotion__content">
            <h1>Welcome to <i>Blog.San</i></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia.</p>
            <div class="icons-float">
                <img src="/Images/icons/Arch Linux.png" alt="Arch Linux" style="animation-delay: 0s;">
                <img src="/Images/icons/Linux.png" alt="Linux" style="animation-delay: 0.3s;">
                <img src="/Images/icons/Node.js.png" alt="Node.js" style="animation-delay: 0.6s;">
                <img src="/Images/icons/NPM.png" alt="NPM" style="animation-delay: 0.9s;">
                <img src="/Images/icons/PHP.png" alt="PHP" style="animation-delay: 1.2s;">
                <img src="/Images/icons/vscode.png" alt="VSCODE" style="animation-delay: 1.5s;">
            </div>
        </div>
        <div class="ContentUserPhoto">
            <img src="/photo.jpg" alt="" class="imageUser">
        </div>
    </section>
    <main>
        <aside class="categories">
            <h3>Categories</h3>
            <ul>
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
            </ul>
        </aside>
        <section>
            <?php foreach ($posts as $post): ?>
                <article class="post">
                    <div class="post__content">
                        <div class="post__author">
                            <div class="post__author-info">
                                <img src="photoFile.jpg" alt="Author profile" class="post__author-img">
                                <h2 class="post__author-name"><?php echo $post["User"]; ?></h2>
                            </div>
                        </div>
                        <h1 class="post__title"><?php echo $post["title"]; ?></h1>
                        <p class="post__text"><?php echo $post["content"]; ?></p>
                        <img src="/Images/Post/<?php echo $post["photo"]; ?>" alt="Image for post" class="post__image">
                        <p class="post__text"><?php echo $post["content2"]; ?></p>
                        <div class="post__footer">
                            <p class="post__category">#<?php echo $post["category"]; ?></p>
                            <button class="post__button">Nex Post</button>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
</body>

</html>