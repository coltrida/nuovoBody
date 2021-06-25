-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: body
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `calendars`
--

DROP TABLE IF EXISTS `calendars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calendars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `giorno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orario` time NOT NULL,
  `mezza` tinyint DEFAULT NULL,
  `course_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `calendars_course_id_foreign` (`course_id`),
  CONSTRAINT `calendars_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calendars`
--

LOCK TABLES `calendars` WRITE;
/*!40000 ALTER TABLE `calendars` DISABLE KEYS */;
INSERT INTO `calendars` VALUES (1,'1','10:00:00',NULL,8,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(2,'1','10:30:00',1,8,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(3,'1','13:30:00',NULL,24,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(4,'1','14:00:00',1,24,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(5,'1','13:30:00',NULL,25,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(6,'1','14:00:00',1,25,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(7,'1','17:00:00',NULL,26,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(8,'1','17:30:00',1,26,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(9,'1','18:30:00',NULL,27,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(10,'1','19:00:00',1,27,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(11,'1','19:30:00',NULL,25,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(12,'1','20:00:00',1,25,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(13,'2','13:30:00',NULL,28,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(14,'2','14:00:00',1,28,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(15,'2','18:30:00',NULL,29,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(16,'2','19:00:00',1,29,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(17,'2','19:30:00',NULL,30,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(18,'2','20:00:00',1,30,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(19,'2','19:30:00',NULL,32,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(20,'2','20:00:00',1,32,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(21,'3','10:00:00',NULL,8,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(22,'3','10:30:00',1,8,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(23,'3','13:30:00',NULL,33,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(24,'3','14:00:00',1,33,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(25,'3','17:00:00',NULL,26,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(26,'3','17:30:00',1,26,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(27,'3','18:30:00',NULL,22,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(28,'3','19:00:00',1,22,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(29,'3','19:30:00',NULL,25,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(30,'3','20:00:00',1,25,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(31,'4','13:30:00',NULL,34,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(32,'4','14:00:00',1,34,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(33,'4','18:30:00',NULL,36,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(34,'4','19:00:00',1,36,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(35,'4','19:30:00',NULL,31,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(36,'4','20:00:00',1,31,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(37,'4','19:30:00',NULL,32,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(38,'4','20:00:00',1,32,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(39,'5','10:00:00',NULL,8,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(40,'5','10:30:00',1,8,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(41,'5','13:30:00',NULL,31,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(42,'5','14:00:00',1,31,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(43,'6','11:00:00',NULL,35,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(44,'6','11:30:00',1,35,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(45,'6','11:00:00',NULL,37,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(46,'6','11:30:00',1,37,'2021-06-24 19:13:25','2021-06-24 19:13:25');
/*!40000 ALTER TABLE `calendars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrizione` text COLLATE utf8mb4_unicode_ci,
  `trainer_id` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'KRAV MAGA','Il Krav Maga in ebraico significa combattimento a corta distanza, è un moderno ed efficace sistema di autodifesa adatto a uomini e donne di tutte le età. Ideato da Imi Lichtenfeld è un mix di tecniche di varie discipline (boxe, thay boxe, judo, lotta, ju jitsu) adattate e semplificate per la vita reale dove non ci sono ring o tatami',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(2,'SCUOLA DI BALLO','Lezioni di ballo liscio e da sala con la scuola BRIO DANCE Non compreso nel costo standard dell’abbonamento in palestra.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(3,'CARDIO e TONE','La lezione si compone di 4 momenti, una prima fase di riscaldamento, una seconda fase con movimenti aerobici semplici a ritmo di musica, una terza fase di lavoro sulla tonificazione di alcuni gruppi muscolari e l’ultima fase di rilassamento e stretching. Si svolge a corpo libero o con l’utilizzo di piccoli attrezzi ',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(4,'HIIT TRAINING','L\'High Intensity Interval Training descrive una modalità di esercizio caratterizzata da brevi e intermittenti esplosioni di vigorosa attività, inframezzate da periodi di riposo o di recupero attivo. Si tratta di una tipologia di allenamento molto efficace nel dimagrimento dove si alternano momenti di lavoro ad alta intensità ad esercizi a più bassa intensità.  INSANY-T   TABABA   NTC sono protocolli di allenamento hiit.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(5,'FUNCTIONAL STEP','I classici passi dello step, sali e scendi sullo scalino, si combinano con esercizi di tonificazione per creare un allenamento divertente, vario ed allenante che coinvolge ogni distretto muscolare.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(6,'KICK BOXING','La kick boxing è uno sport da combattimento, che nel suo insieme combina tecniche di calcio delle arti marziali orientali e tecniche di pugno del pugilato. É un tipo di sport che soddisfa sia uomini che donne per la sua preparazione atletica e il raggiungimento di ottime prestazioni fisiche, ha come obiettivo un intenso training cardiovascolare con un sensibile miglioramento della resistenza e del tono muscolare interessando tutte le parti del corpo (gambe, braccia, spalle, addome e dorsali) di fatti può essere praticato come allenamento fisico completo anche per chi non vuole combattere, è inoltre un perfetto anti-stress, ed ultimo ma non meno importante costituisce un mezzo di autodifesa sia per donne che per uomini conferendo all’atleta non solo la conoscenza di tecniche da combattimento ma anche una maggiore sicurezza di se e delle proprie capacità.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(7,'FIT BOX',' ',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(8,'GINNASTICA DOLCE','Si tratta di una ginnastica eseguita con movimenti lenti, graduali, a basso impatto. E\' un esercizio ginnico soft studiato per avvicinare al movimento persone sedentarie, anziani o coloro che hanno problemi di tipo ortopedico.  La ginnastica dolce consiste in movimenti semplici: piegamenti, allungamenti e stretching, eseguiti in modo da non richiedere a muscoli e articolazioni eccessivi sforzi. Prevede esercizi a corpo libero o l’utilizzo di piccoli attrezzi.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(9,'BODY FLEX & TONE','è un allenamento mirato alla tonificazione di tutti i principali distretti muscolari: addome, glutei, spalle, gambe e braccia. Gli esercizi possono essere svolti a corpo libero o con piccoli attrezzi come elastici, palle, bosu o fit ball. . Ha la durata di circa 60 minuti e si suddivide in tre fasi: i primi dieci minuti sono dedicati agli esercizi di riscaldamento, a seguire vengono proposti gli esercizi di tonificazione sia al suolo che in piedi, mentre nella  terza e ultima fase si eseguiranno tecniche  di  rilassamento: stretching ed esercizi di respirazione.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(10,'MODRIAN AEROTONE','Lezione in tarda serata della durata di circa 50 minuti Sotto la guida di Alessio Modrian si eseguiranno movimenti aerobici semplici a tempo di musica ed esercizi di tonificazione. L’ultima parte della lezione si svolgerà a terra per un lavoro specifico sull’addome e stretching.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(11,'POSTURAL & CORE WORKOUT','Questo tipo di lezione si prefigge di migliorare la postura, rinforzando i principali muscoli ed essa correlati, lavorando sulla mobilità articolare, sulla respirazione e sull’equilibrio. Scopo del corso è prevenire ed alleviare i principali fastidi legati scorretta postura del corpo utilizzando tecniche di ginnastica, yoga e pilates. Grande attenzione e lavoro sarà svolto sulla fascia del core al rinforzo dunque dei muscoli profondi del tronco e del bacino, al fine di ottimizzare qualsiasi gesto che richieda stabilità. Il core è il centro, ed è proprio dal centro del nostro corpo che parte il movimento. Con un core stabile e forte tutto sarà piu\' semplice e sicuro.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(12,'SPINNING','Se siete amanti della bike ecco l’attività che fa per voi. Si pedala a ritmo di musica seguendo un percorso costruito dall’insegnante con salite, discese e conseguenti cambi di velocità ed intensità',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(13,'FUNCIONAL & CORE WORKOUT','Un movimento si dice funzionale quando rispecchia i gesti della vita quotidiana, movimenti naturali realizzati grazie alla contrazione sinergica di piu\' gruppi muscolari. Scopo di questo allenamento è sviluppare un corpo bello, armonico e forte tramite esercizi che richiamano le funzioni base per cui è nato; per questo si vanno a creare percorsi che si avvicinino il più possibile a quello che il corpo umano fa per natura. Nella nostra vita quotidiana non esiste l\'isolamento muscolare tipico della sala attrezzi, qualsiasi cosa facciamo, dal semplice camminare all\'alzare una busta della spesa, dall\'arrampicata al salto, richiede movimenti permessi dalla sinergia muscolare.  L\'allenamento funzionale è un allenamento a 360° , essere funzionali vuol dire essere forti, reattivi, agili, veloci, elastici, coordinati, grazie al fatto che si acquisiscono nuovi schemi motori attraverso esperienze motorie multiple e sempre piu\' difficili (la progressione è fondamentale nel functional training). Tale allenamento, grazie alle sue caratteristiche, va a sollecitare la muscolatura profonda che crea stabilizzazione articolare, a differenza del classico lavoro analitico che siamo abituati a svolgere in palestra. Questo lavoro di stabilizzazione previene molti infortuni e rinforza le articolazioni. Core workout. Esso si riferisce al rinforzo dei muscoli profondi del tronco e del bacino, al fine di ottimizzare qualsiasi gesto che richieda stabilità. Il core è il centro, ed è proprio dal centro del nostro corpo che parte il movimento. Con un core stabile e forte tutto sarà piu\' semplice e sicuro, dal salire sopra uno sgabello allo svolgimento di squat – affondi – military press ecc',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(14,'BALLI CARAIBICI','a cura della scuola di ballo SALSA ACADEMY. Disciplina non compresa nel costo dell’abbonamento standard della palestra.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(15,'B WORKOUT','Allenamento dedicato agli arti inferiori e glutei. La lezione della durata di circa un ora prevede una fase di riscaldamento e a seguire una serie di esercizi di tonificazione volti a migliorare il lato B.  Squat e affondi saranno le parole chiave di questo intenso workout',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(16,'BOOT CAMP MILITARY','Allenamento ispirato a quello militare, piegamenti sulle braccia, trazioni, percorsi, esercizi a corpo libero. Allenamento ad alta intensità consigliato a soggetti già allenati.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(17,'PILATES','Il Pilates ha lo scopo di rafforzare il corpo, di sviluppare fluidità e precisione dei movimenti, di migliorare o correggere la postura con un lavoro centrato sulle regioni addominale e dorsale. Il Metodo si prefigge di ottenere questi obiettivi eseguendo movimenti lenti, mantenendo una grande concentrazione e attenzione alla respirazione, in modo che l’attività fisica risulti in una maggiore consapevolezza del proprio corpo e dei movimenti che si compiono. Prende il nome da Joseph Pilates, che nella prima metà del 900 lo ha sviluppato e ha messo a punto i macchinari necessari alla sua pratica, utilizzandolo per riabilitare reduci di guerra e allenare ballerini e atleti.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(18,'YOGA DOLCE','  ',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(19,'YOGA DINAMICO','  ',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(20,'YOGA','Yoga è il termine generico per definire una disciplina di origine orientale. Una disciplina mirata a garantire benefici al corpo, attraverso il potenziamento muscolare e il miglioramento posturale, ma anche alla mente. Nato in India nei secoli scorsi, lo yoga si basa sull’assunzione di determinate posizioni, chiamate Asana, mantenute con il controllo del respiro, Pranayama, e il dominio della mente. La versione più nota e praticata è l’Hata yoga: posizioni statiche del corpo unite a una respirazione corretta e a un   atteggiamento mentale finalizzato a cancellare ogni forma di pensiero; migliora la consapevolezza di sé, l’atteggiamento posturale e mentale.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(21,'SPARTAN CIRCUIT','allenamento a postazioni ad alta intensitÃ , svolto a corpo libero o con i vari attrezzi dell\'area funzionale come kettlebell, suspension trainer, fune nautica, med ball, fit ball ecc. ecc.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(22,'CARDIO & CORE','lavoro intenso sull\'addome con intervalli cardio ',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(23,'TOTAL BODY','Il Total body è un allenamento mirato alla tonificazione di tutti i principali distretti muscolari: addome, glutei, spalle, gambe e braccia. Gli esercizi possono essere svolti a corpo libero o con attrezzi come step, manubri, cavigliere, elastici o palle mediche. La lezione si svolge in gruppo e a tempo di musica. Ha la durata di circa 60 minuti e si suddivide in tre fasi: i primi dieci minuti sono dedicati allo stretching e agli esercizi di riscaldamento Segue il total body vero e proprio con esercizi sia al suolo che in piedi.  La terza e ultima fase è dedicata al rilassamento: stretching ed esercizi di respirazione.',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(24,'ACQUA DANCE','Su Prenotazione',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(25,'BODY CROSS','Su Prenotazione',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(26,'ACQUA BOND','Su Prenotazione',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(27,'ASS & ABS','Gambe, Glutei e Addome',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(28,'ACQUA HIIT','Su Prenotazione',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(29,'BODY BALANCE',NULL,NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(30,'NTC HIIT','Focus Resistenza',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(31,'NTC STRENGTH','Focus Forza',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(32,'BRAZILIAN JIU-JITSU','Su Prenotazione',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(33,'BODY TONE',NULL,NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(34,'ACQUA GYM','Giuly',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(35,'ACQUA GYM','Nadia',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(36,'WORKOUT & YOGA',NULL,NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25'),(37,'BJJ OPEN TATAMI','Su Prenotazione',NULL,'2021-06-24 19:13:25','2021-06-24 19:13:25');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `houres`
--

DROP TABLE IF EXISTS `houres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `houres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `giorno` int NOT NULL,
  `oraMattinoInizio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oraMattinoFine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oraPomeriggioInizio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oraPomeriggioFine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `houres`
--

LOCK TABLES `houres` WRITE;
/*!40000 ALTER TABLE `houres` DISABLE KEYS */;
INSERT INTO `houres` VALUES (1,1,'09:00','12:30','14:30','21:00',NULL,NULL),(2,2,'09:00','12:30','14:30','21:00',NULL,NULL),(3,3,'09:00','12:30','14:30','21:00',NULL,NULL),(4,4,'09:00','21:00',NULL,NULL,NULL,NULL),(5,5,'09:00','21:00',NULL,NULL,NULL,NULL),(6,6,'09:00','12:30',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `houres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_06_18_170437_create_trainers_table',1),(5,'2021_06_18_171104_create_courses_table',1),(6,'2021_06_18_171613_create_calendars_table',1),(7,'2021_06_19_165944_create_houres_table',1),(8,'2021_06_21_071040_create_posts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testo` text COLLATE utf8mb4_unicode_ci,
  `evidenza` tinyint DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Addio Cellulite',NULL,NULL,'1.jpg','2021-03-01 00:00:00','2021-03-01 00:00:00'),(2,'Benessere Posturale',NULL,1,'2.jpg','2021-04-01 00:00:00','2021-04-01 00:00:00'),(3,'Giornata Otium',NULL,NULL,'3.jpg','2020-08-20 00:00:00','2020-08-20 00:00:00'),(4,'Alimentazione',NULL,NULL,'4.jpg','2021-05-19 00:00:00','2021-05-19 00:00:00'),(5,'Allenamenti in acqua',NULL,NULL,'5.jpg','2021-05-20 00:00:00','2021-05-20 00:00:00'),(6,'Power Balance',NULL,NULL,'6.jpg','2020-08-15 00:00:00','2020-08-15 00:00:00'),(7,'Crossfit',NULL,1,'7.jpg','2020-08-28 00:00:00','2020-08-28 00:00:00'),(8,'Personal Training Room',NULL,NULL,'8.jpg','2020-09-15 00:00:00','2020-09-15 00:00:00'),(9,'B Workout',NULL,1,'9.jpg','2020-02-15 00:00:00','2020-02-15 00:00:00'),(10,'Calisthenics',NULL,NULL,'10.jpg','2020-09-01 00:00:00','2020-09-01 00:00:00'),(11,'Hiit Core',NULL,NULL,'11.jpg','2020-07-01 00:00:00','2020-07-01 00:00:00'),(12,'KMRED',NULL,NULL,'12.jpg','2019-08-01 00:00:00','2019-08-01 00:00:00');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trainers`
--

DROP TABLE IF EXISTS `trainers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trainers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descrizione` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trainers`
--

LOCK TABLES `trainers` WRITE;
/*!40000 ALTER TABLE `trainers` DISABLE KEYS */;
INSERT INTO `trainers` VALUES (1,'Nadia','Castellani','1.jpg','Nata a Perugia il 14 marzo 1986 dopo aver frequentato il liceo scientifico si iscrive a scienze motorie. Le prime esperienze lavorative la vedono coinvolta con i più piccoli nelle scuole elementari ed infanzia con il progetto \'sport giocando\', successivamente si dedicherà al mondo del fitness frequentando numerosi corsi specializzandosi in fitness musicale, functional training, postural training e allenamenti al femminile. Cresciuta nel mondo del fitness porto avanti questo lavoro con professionalità e passione, convinta che l\'attività fisica sia prima di tutto salute e che si debba rendere cura del proprio corpo essendo lo specchio dell\'anima e l\'unico posto che abbiamo per vivere.',NULL,NULL),(2,'Giuliana','Moretti','2.jpg','Nasce a Cortona il 07/10/1961 – 1986 1° donna nel comune di Cortona, consegue la cintura nera di Karate. 1987 Si diploma istruttore di Body building, a Ravenna (oggi F.I.F. – federazione italiana fitness). 1988 E’ scelta dall’Associazione Italiana di Ginnastica Aerobica, a far parte di un gruppo ristretto di circa 20 atlete/i, che dovranno esibirsi c/o lo stadio dei marmi a Roma nella cerimonia di apertura del meeting internazionale di Atletica Leggera. 1993  A Firenze vince i campionati regionali di Ginnastica Aerobica. 1994 - 1996   «Expò Etruria» (due edizioni) 1995  Meeting di Body building c/o teatro comunale di Sinalunga 1996  «Bettolle in… immagini e musica» 1997  Campionato Italiano di Body building Sinalunga 1997   «Mayspotmeeting97» dove il gruppo si esibisce ad Arezzo sia in piazza Grande che in p. San  Jacopo. 2001 1° edizione del premio sport «Citta di Cortona» c/o le terme di Manzano  2003  Frequenta uno dei primi corsi che abilitano all’insegnamento della Fit-boxe. 2° classificata Trail «Città di Cortona» 2016  14 km cat. «Over 50» 2° classificata  Trail «delle valli Etrusche» 2016  14 km     cat. «Over 50» 	2017 – I migliori piazzamenti nelle ultime gare disputate 	1°    classificata  «Città di Cortona» 2017  14 km    cat. «Over 50» 4°   classificata   Trail «delle valli Etrusche» 2017  14 km      cat. «Over 50» 	10°  class. Assoluta  «Tuscany crossing» 2017 _ 15 km _  cat. Unica (sul podio poiché tra le prime 10) 	1°    classificata   Trail «del Pratomagno» 2017  14 km cat. «Over 50» 3°    classificata   Trail «Sacret forrest» 2017  cat. «Over 50» 2°    classificata Trail «del Falterona» 2017 14 km        cat. «Over 50» 	1°    classificata  Ecomezza della acque Val d’Orcia  22 km     cat. «Veterane» 3°   classificata  Ecotrail «Tra i borghi»  21 km   cat. «Over 50» 	1°   classificata   Campionato  «Valli Aretine Trail Cup 2017»   cat. «Sprint trail over 50» 1°   classificata   Trail  Girifalco - Cortona 2017  7 km  cat. «Over 50» 	1°   classificata  Trail  dell’Amiata  2017  14 km   cat. «Over 50»',NULL,NULL),(3,'Alessio','Mariottoni','3.jpg','Laurea in scienze motorie (2001) Laurea in scienze dell\'alimentazione (2002), Specializzazione recupero spalla anca e ginocchio (EAA) / Personale Trainer (MSP) / Istruttore avviamento atletica leggera ( FIDAL) / Allenatore di nuoto di I livello (FIN)/ Assistente bagnanti/primo soccorso ( FIN salvamento) / Istruttore nuoto II livello ( FIN ) / Presidente il corpo nel mondo acsd ( ginn dolce, musica, attivita\' fisica adattata per anziani, scuola avviamento atletica leggera, escursioni orientering patto ambientale, progetto termografia equina, organizzazione eventi di beneficenza,progetto ippoterapia, progetto musica negli asili, progetto educazione fisica nelle elementari, progetto scuola/acqua/medicinali LIFOG Kenya (dal 2008) ,gestione estiva associativa dell\'organizzazione corsi tempo libero eventi in piscine nel periodo estivo); guida di safari di I livello con driver (kenya), produttore discografico dal 1999 iscritto alla Siae, autore discografico deejay e pensatore libero educato al rispetto e all altruismo, credo negli animali ma molti uomini possono farcela. Appassionato di biologia anatomia animale etologia (corso guida di safari di I livello AIEA (associazione italiana esperti d\'africa) con driver (kenya) )',NULL,NULL);
/*!40000 ALTER TABLE `trainers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.it','2021-06-24 19:13:24','$2y$10$2WFBqOHYxaZDpR10TYo0eOkdIHz7gcBEYLAshij7uhgk00IcT6B/u',NULL,'2021-06-24 19:13:24','2021-06-24 19:13:24');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-24 21:13:37
