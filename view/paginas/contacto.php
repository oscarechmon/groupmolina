
    <main class="" style="margin-top: 120px">
      <h1 class="text-center py-5">
        Ingresa tus datos para ponernos con usted...
      </h1>
      <div class="container-form my-5">
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>Regístrate aquí</h2>

            <input
              id="txtnombres"
              type="text"
              class="field"
              placeholder="Nombres Completos"
            />
            <input
              id="txtcorreo"
              type="mail"
              class="field"
              placeholder="Correo"
            />
            <input
              id="txtcelular"
              type="tel"
              class="field"
              placeholder="Teléfono"
              onkeypress="return soloNumeros(event)"
            />
            <textarea
              id="txtmensaje"
              placeholder="Mensaje"
              class="field"
            ></textarea>
            <button class="btnEnviar" onclick="enviarData()">Enviar</button>
          </div>
        </div>
      </div>
      <div class="container">
        <h1 class="text-center pt-5">Ubícanos</h1>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3902.0761741381!2d-76.96013768518748!3d-12.03827679147294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTLCsDAyJzE3LjgiUyA3NsKwNTcnMjguNiJX!5e0!3m2!1ses!2spe!4v1690490871197!5m2!1ses!2spe"
          height="600"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="w-100 my-5"
        ></iframe>
      </div>
    </main>
