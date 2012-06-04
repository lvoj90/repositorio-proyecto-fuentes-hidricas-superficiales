<?php

try {
    $p = new PDFlib();

    /*  abrir un nuevo archivo PDF; insertar un nombre de archivo para crear el PDF en disco */
    if ($p->begin_document("", "") == 0) {
        die("Error: " . $p->get_errmsg());
    }

    $p->set_info("Creator", "hola.php");
    $p->set_info("Author", "Rainer Schaaf");
    $p->set_info("Title", "¡Hola mundo (PHP)!");

    $p->begin_page_ext(595, 842, "");

    $font = $p->load_font("Helvetica-Bold", "winansi", "");

    $p->setfont($font, 24.0);
    $p->set_text_pos(50, 700);
    $p->show("¡Hola mundo!");
    $p->continue_text("(dice PHP)");
    $p->end_page_ext("");

    $p->end_document("");

    $buf = $p->get_buffer();
    $len = strlen($buf);

    header("Content-type: application/pdf");
    header("Content-Length: $len");
    header("Content-Disposition: inline; filename=hola.pdf");
    print $buf;
}
catch (PDFlibException $e) {
    die("Ocurrió un Excepción PDFlib en el ejemplo hola:\n" .
    "[" . $e->get_errnum() . "] " . $e->get_apiname() . ": " .
    $e->get_errmsg() . "\n");
}
catch (Exception $e) {
    die($e);
}
$p = 0;
?> 