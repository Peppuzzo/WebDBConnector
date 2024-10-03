# WebDBConnector (Repository work in progress!!)
This repository contains a class assignment assigned in 4th grade, the aim was to develop web pages (directly with file.php) that could interact with the user (via html pages) and connect to a database to be able to send/view the data.


# Connessione a un Database Locale tramite una Pagina Web

Questo progetto dimostra come un computer possa inviare dati a un database MySQL tramite una pagina web locale. L'obiettivo è creare un ambiente di sviluppo che simuli una connessione reale tra il frontend e il backend, con il database che gestisce i dati.

---

## Architettura del Sistema

Di seguito è riportato un diagramma che rappresenta la comunicazione tra il computer, la pagina web e il database:

<div align="center">
  <img src="https://via.placeholder.com/600x300?text=Computer+connects+to+Database+via+Webpage" alt="Connessione tra computer e database" width="600"/>
</div>

- **Computer Locale**: Esegue la pagina web e invia/riceve dati dal database.
- **Pagina Web (HTML/PHP)**: Invio dei dati tramite un form o API.
- **Server Locale (DevServer17)**: Gestisce le richieste e connette il frontend con il database.
- **Database (MySQL)**: Memorizza i dati inviati.

---

## Componenti da Installare

Per eseguire questo progetto, sono necessari i seguenti strumenti:

### 1. [DevServer17](https://sourceforge.net/projects/wampserver/)
   DevServer17 include Apache, PHP e MySQL ed è utilizzato come server locale.

   - **Download**: [Scarica DevServer17](https://sourceforge.net/projects/wampserver/)
   - Dopo l'installazione, assicurati che Apache e MySQL siano in esecuzione.

### 2. [MySQL Workbench](https://dev.mysql.com/downloads/workbench/)
   MySQL Workbench è un'interfaccia grafica per gestire i database MySQL.

   - **Download**: [Scarica MySQL Workbench](https://dev.mysql.com/downloads/workbench/)
   - Configura il server MySQL locale su `localhost:3306`.

### 3. Configurazione della Porta MySQL
   La porta di default di MySQL è **3306**. Assicurati che non sia bloccata da firewall o altre applicazioni.

---

## Istruzioni per l'Installazione

1. **Installa DevServer17**:
   - Scarica e installa DevServer17 dal link fornito.
   - Avvia DevServer17 e verifica che Apache e MySQL siano attivi.

2. **Configura MySQL**:
   - Apri MySQL Workbench e connettiti al server MySQL in esecuzione su `localhost`.
   - Crea un database chiamato `bank_db` per il tuo progetto.

3. **Sposta i file nel server**:
   - Posiziona i tuoi file web nella cartella **www** di DevServer17 (di solito si trova sotto `C:/DevServer17/www/`).
   - Il progetto include una pagina web (`index.html`) e uno script PHP (`submit.php`) per inviare i dati al database.

4. **Apri la pagina web**:
   - Apri un browser e digita `http://localhost/tuoprogetto` per accedere alla tua pagina web.

5. **Testa l'invio dei dati**:
   - Compila i campi del form nella pagina web e invia i dati.
   - Verifica su MySQL Workbench che i dati siano stati correttamente inseriti nel database.

---

## Struttura del Progetto

Ecco un esempio della struttura del progetto:

```bash
progetto/
├── www/
│   ├── index.html        # Pagina web con il form per l'invio dei dati
│   ├── submit.php        # Script PHP per gestire la connessione al database
│   └── style.css         # File CSS per lo stile della pagina
├── sql/
│   └── database.sql      # Dump del database MySQL
└── README.md             # Questo file

