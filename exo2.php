<?php
include_once('index.php');
require("MagicParser.php");
 
  function myRecordHandler($record)
  {
    print_r($record);
    print $record["FLIGNE"];
    print $record["PRODUIT_POCLEUNIK"];
    print $record["PRODUIT_REF"];
    print $record["REFCIALE_ARCLEUNIK"];
    print $record["REFCIALE_REFART"];
    print $record["REFCIALE_REFCAT"];
    print $record["POTRAD_DESI"];
    print $record["REFCIALE_CTVA"];
    print $record["FICTECH_MEMOCAT"];
    print $record["FICTECH_MEMONET"];
    print $record["PRODUIT_MARQUE"];
    print $record["PRODUIT_CLEP01"];
    print $record["PRODUIT_CLEP02"];
    print $record["PRODUIT_CLEP03"];
    print $record["PRODUIT_CLEP04"];
    print $record["PRODUIT_CLEP06"];
    print $record["PRODUIT_CLEP07"];
    print $record["PRODUIT_GCOLORIS"];
    print $record["PRODUIT_GTAILLE"];
    print $record["PRODUIT_CLEP12"];
    print $record["REFCIALE_FICHEINA"];
    print $record["REFCIALE_MODTE"];
    print $record["PRODUIT_MODTE"];
    print $record["ARTICLE_POIDS"];
    print $record["ARTICLE_HNORMEL"];
    print $record["ARTICLE_CATEG"];
  }
   
  MagicParser_parse("catalogue.XML","myRecordHandler","xml|HF_DOCUMENT/FLIGNE/");
  