<h1>Contact Us</h1>

<form class="contenedor-formulario" method="POST" action="/contacto">
    <fieldset class="formulario">
        <legend>Personal Information</legend>

        <label>Name</label>
        <input type="text" name="contacto[nombre]" id="name" placeholder="Your Name">

        <label>Last Name</label>
        <input type="text" name="contacto[lastName]" id="lastName" placeholder="Your Last Name">
    </fieldset>

    <fieldset class="formulario">
        <legend>Contact Information</legend>

        <label>Email</label>
        <input type="email" name="contacto[email]" id="email" placeholder="Email">

        <label>Phone</label>
        <input type="tel" name="contacto[lastName]" id="lastName" placeholder="Your Last Name">
    </fieldset>
</form>