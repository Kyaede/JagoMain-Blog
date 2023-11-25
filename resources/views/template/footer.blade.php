<style>
    /* CSS untuk Footer */
footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.footer-logo img {
  max-width: 100px;
  height: auto;
}

.footer-links ul {
  list-style-type: none;
  padding: 0;
}

.footer-links ul li {
  margin-bottom: 10px;
  margin-left: 200;
}

.footer-links ul li a {
  text-decoration: none;
  color: #fff;
}

.footer-contact p {
  margin-right: 200;
}

.footer-social ul {
  list-style-type: none;
  padding: 0;
}

.footer-social ul li {
  display: inline-block;
  margin-right: 10px;
}

.footer-social ul li a {
  text-decoration: none;
  color: #fff;
  font-size: 20px;
}

/* Media Query untuk responsif */
@media (max-width: 768px) {
  .footer-content {
    flex-direction: column;
    text-align: center;
  }
  .footer-logo {
    margin-bottom: 20px;
  }
  .footer-social ul {
    margin-top: 20px;
  }
}

</style>
<footer>
    <div class="footer-content flex">
      <div class="footer-links">
        <ul>
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">Portofolio</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <p>Kontak kami:</p>
        <p>Email: nizharfazary@gmail.com</p>
        <p>Telepon: +62-896-8042-7461</p>
      </div>
    </div>
    <div class="footer-social">
      <ul>
        <li><a href="#"><i class="fab fa-facebook">Facebook</i></a></li>
        <li><a href="#"><i class="fab fa-twitter">Twitter</i></a></li>
        <li><a href="#"><i class="fab fa-instagram">Instagram</i></a></li>
      </ul>
      &copy; 2023 Nizhar Fazary. Seluruh hak cipta dilindungi.
    </div>
  </footer>
  