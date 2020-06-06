# php-project

PRIMJER PHP PROJEKTA!! 

v1-register - Registracijska forma
  Registracija korisnika preko forme i zapis podataka u bazu. Kod registracije korisnika koristimo HASH PASSWORD kako bi 
  zaštitili lozinku korisnika.
  #password_hash https://secure.php.net/manual/en/function.password-hash.php

v2-register - Registracijska forma
  Provjera da li postoji zapisan korisnik sa istim korisničkim imenom ili lozinkom. 

v3-signin - Forma za prijavu
  Provjerava se da li korisnik postoji u bazi. Ako postoji u bazi, onda otvara administracijsku stranicu. 
  Prijava korsnika radi se dodatnom provjerom lozinke
  #password_verify https://secure.php.net/manual/en/function.password-verify.php
  Otvara se u izborniku novi menu i mogućnost odjave korisnika.
  Nakon završetka rada moramo omogućiti korisniku da se odjavi odnosno da obriše sjednicu na serveru.
  Koristit ćemo za brisanje sjednice unset() ili session_destroy() 
  *unset() destroys the specified variables. 
  *session_destroy() destroys all of the data associated with the current session.
  
v4-admin-user
  Kada se korisnik ulogira može pregledati sve korisnike u bazi, te provjeriti sve njegove podatke osim lozinke.
  Napraviti podmeni koji će biti u administraciji za uređivanje korisnika (CRUD).
  
v5-admin-news
  Kada se korisnik ulogira može pregledati sve korisnike u bazi, te provjeriti sve njegove podatke osim lozinke.
  Napraviti podmeni koji će biti u administraciji za uređivanje korisnika (CRUD), vijesti (CRUD), kategorija (CRUD).
  
  Napomena:
  Probajte napasti sustav preko ovog URL-a: http://localhost/vjezbe/v5-admin-news/dbconn.php
  
  Što će se dogoditi ako upišete direktno URL, a niste prijavljeni: http://localhost/vjezbe/v5-admin-news/index.php?menu=6
  
  Kada želimo napraviti upload slike: Problem sa imenom slike? Kako odrediti ime slike?
  
  Kada brišemo članak moramo obrisati i sliku koja je vezana za taj članak!
  
  Kako se zaštititi od unosa HTML oznaka, odnosno da nam korisnik ne napravi SQL injection?
  htmlspecialchars — Convert special characters to HTML entities http://php.net/manual/en/function.htmlspecialchars.php
  
NEWS kategorija . prikazati sve vijesti iz baze koje nisu arhivirane
  Kada se klikne na "more" prikazati sav tekst koji je vezan uz ovu vijest.
  


