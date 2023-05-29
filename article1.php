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
      <section class="article">
         <div class="container">
            <div class="article-container">
             <div class="page-container">
               <article id="writer" class="card">
                  <img src="img/combat1.png" alt="">
                  <small>
                     <p><strong>Image source: </strong>Mahjouri, S.(April 16, 2023).<em>UFC Fight Night results, highlights: Max Holloway turns away latest challenger Arnold Allen by decision</em>.CBS|MMA.https://www.cbssports.com/mma/news/ufc-fight-night-results-highlights-max-holloway-turns-away-latest-challenger-arnold-allen-by-decision/
                     </p>
                  </small>
                  <h2 class="l-heading" >UFC Fight Night results, highlights: Max Holloway turns away latest challenger Arnold Allen by decision</h2>
                  <div class="meta">
                     <small>
                        <i class="fas fa-user">Written by: John Doe | May 15, 2023</i>
                     </small>
                     <div class="category category-combat">Combat</div>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit soluta eaque ut exercitationem libero. Explicabo tempore veritatis placeat quae suscipit blanditiis. Saepe laborum voluptates deserunt mollitia porro quo illo maiores.</p>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid officiis temporibus illo, adipisci ipsam error! Eos recusandae eveniet sed voluptatum dolore ut at porro iusto quo veniam pariatur placeat delectus nisi, deserunt totam! Ea eum quisquam quo repellendus repellat reiciendis molestiae ut fugiat minus dolorum quia tempore laboriosam eligendi, minima eaque assumenda harum ullam blanditiis vero! Quaerat perspiciatis assumenda voluptas porro magnam maiores facilis ducimus adipisci eos nesciunt cum animi, est cupiditate ipsum eius veniam minima commodi voluptates ratione earum, amet similique! Eum deserunt tempore placeat similique! Nihil minima explicabo distinctio, ut, corporis quo dolorum odio, illum sunt rem officiis?</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis totam odit in facilis dolore! Autem magni in dolor quia! Similique eligendi tempora, ullam eveniet beatae eum labore voluptatibus quia, culpa dicta excepturi dolor enim voluptate reiciendis. Ducimus quibusdam, veritatis qui voluptas, voluptatum quia voluptate magni ipsam, eos repellendus vitae consectetur!</p>
               </article>
            </div>
            <!-- CATEGORIES-LATESTARTICLE START -->
            <?php include 'categories-latestArticle.php'?>
            <!-- CATEGORIES-LATESTARTICLE END -->
            <aside class="join-club">
               <h4>Join our club</h4>
               <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, quo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, quasi.
               </p>
               <a href="#" class="btn btn-secondary">Join Now</a>
            </aside>
         </div>
         </div>
      </section>
      <!-- FOOTER START -->
      <?php include 'footer.php'?>
      <!-- FOOTER END -->
   </div>
</body>
</html>