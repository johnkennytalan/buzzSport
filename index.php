<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BuzzSport</title>
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/tablet.css" media="screen and (max-width: 768px)">
   <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 500px)">
   
   <script src="https://kit.fontawesome.com/f731ce6a1a.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="root">
      <!--HEADER START-->
      <?php include 'header.php'?>
      <!-- HEADER END -->
      <div class="main-showcase-container">
         <div class="showcase">
            <div class="container">
               <div class="showcase-container">
                  <div class="showcase-content">
                     <div class="category category-ball">Ball Sport</div>
                     <h1>Text Article here</h1>
                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque porro dolorem harum, id adipisci ipsa tempore iste, dolores autem veniam a. Ab, officia odit vero rem aspernatur sapiente omnis! Voluptatibus!</p>
                     <a href="article.php" class="btn btn-primary btn-sm">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="main-grid-container">
         <div class="container">
            <h1>Latest Article</h1>
            <div class="grid-content">
               <article class="card article-2">
                     <img src="img/combat1.png" alt="">
                  <div>
                  <div class="category category-combat">combat sport</div>
                  <h3>
                     <a href="article1.php">Lorem Ipsum</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo veniam aliquam iusto quas vitae sequi.</p>
               </div>
               </article>
               <article class="card article-1">
                  <div>
                     <div class="category category-esport">E-sport</div>
                     <h3>
                        <a href="article2.php">Lorem Ipsum</a>
                     </h3>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo veniam aliquam iusto quas vitae sequi.</p>
                  </div>
                  <img src="img/esport.png" alt="">
               </article>
               <article class="card article-1">
                  <img src="img/ball1.jpg" alt="">
                  <div>
                  <div class="category category-ball">Ball sport</div>
                  <h3>
                     <a href="article3.php">Lorem Ipsum</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo veniam aliquam iusto quas vitae sequi.</p>
               </div>
               </article>
               <article class="card article-1">
                  <img src="img/mind.jpg" alt="">
                  <div>
                  <div class="category category-mind">Mind sport</div>
                  <h3>
                     <a href="article4.php">Lorem Ipsum</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo veniam aliquam iusto quas vitae sequi.</p>
               </div>
               </article>
               <article class="card article-1">
                  <div>
                     <div class="category category-extreme">Extreme sport</div>
                     <h3>
                        <a href="article5.php">Lorem Ipsum</a>
                     </h3>
                     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo veniam aliquam iusto quas vitae sequi.</p>
                  </div>
                  <img src="img/extreme.jpeg" alt="">
               </article>
               <article class="card article-1">
                  <img src="img/aquatics1.png" alt="">
                  <div>
                  <div class="category category-aquatics">Aquatic sport</div>
                  <h3>
                     <a href="article6.php">Lorem Ipsum</a>
                  </h3>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo veniam aliquam iusto quas vitae sequi.</p>
               </div>
               </article>
            </div>
         </div>
      </div>
      <section class="main-editor-container">
         <div class="container">
            <h1><span>Writers</span></h1>
            <div class="grid-editor">
               
            <div class="card">
               <img src="img/profile1.jpg" alt="">
               <h4>Name of writer</h4>
               <div class="editor-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, tempora?</p>
               </div>
            </div>
            <div class="card">
               <img src="img/profile2.jpg" alt="">
               <h4>Name of writer</h4>
               <div class="editor-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, tempora?</p>
               </div>
            </div>
            <div class="card">
               <img src="img/profile3.png" alt="">
               <h4>Name of writer</h4>
               <div class="editor-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, tempora?</p>
               </div>
            </div>
         </div>
         </div>
      </section>
      <?php include 'footer.php'?>
   </div>
</body>
</html>