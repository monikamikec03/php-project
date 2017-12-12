# php-project

v1-register - Registracijska forma
  Registracija korisnika preko forme i zapis podataka u bazu. Kod registracije korisnika koristimo HASH PASSWORD kako bi 
  zaštitili lozinku korisnika.
  # password_hash https://secure.php.net/manual/en/function.password-hash.php

v2-register - Registracijska forma
  Provjera da li postoji zapisan korisnik sa istim korisničkim imenom ili lozinkom. 

v3-signin - Forma za prijavu
  Provjerava se da li korisnik postoji u bazi. Ako postoji u bazi, onda otvara administracijsku stranicu. 
  Prijava korsnika radi se dodatnom provjerom lozinke
  # password_verify https://secure.php.net/manual/en/function.password-verify.php
  
  Otvara se u izborniku novi menu i mogućnost odjave korisnika.
