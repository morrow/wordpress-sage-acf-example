<div class="front-page">

  <section class="page-header">
    <section class="contact-form">
      <h2>Richiedi Un Preventivo</h2>
      <form id="requests">
        <label for="name">Nome</label>
        <input id="name" type="text" />
        <label for="email">Email</label>
        <input id="email" type="email" />
        <label for="telephone">Telefono</label>
        <input id="telephone" type="tel" />
        <label for="message">Messaggio</label>
        <textarea id="message"></textarea>
        <div class="privacy-group">
          <input id="privacy" type="checkbox" />
          <label for="privacy">Accetto l'informativa sulla privacy</label>
        </div>
        <input type="submit" value="INVIA RICHIESTA" />
      </form>
    </section>
  </section>

  <section class="introduction column-group">
    <h1 class="tagline"><?php the_field("tagline"); ?></h1>
    <div class="column"><?php the_field("introduction_column_1"); ?></div>
    <div class="column"><?php the_field("introduction_column_2"); ?></div>
    <div class="column"><?php the_field("introduction_column_3"); ?></div>
  </section>

  <section class="what-we-do column-group">
    <h2>Cosa Facciamo</h2>
    <div class="column"><?php the_field("what_we_do_column_1") ?></div>
    <div class="column"><?php the_field("what_we_do_column_2") ?></div>
    <div class="column"><?php the_field("what_we_do_column_3") ?></div>
  </section>

  <section class="more-information">
    <?php the_field("more_information"); ?>
    <button class="contact-button">INVIA RICHIESTA</button>
  </section>

  <section class="clients">
    <?php the_field("clients"); ?>
  </section>

  <section class="about-us column-group">
    <h1> Dicono di noi </h1>
    <div class="column"><?php the_field("about_us_column_1"); ?></div>
    <div class="column"><?php the_field("about_us_column_2"); ?></div>
    <div class="column"><?php the_field("about_us_column_3"); ?></div>
  </section>

  <section class="further-questions">
    <?php the_field("further_questions"); ?>
    <button class="contact-button">INVIA RICHIESTA</button>
  </section>

  <section class="footer-contact">
    <?php the_field("footer_contact"); ?>
  </section>
</div>
