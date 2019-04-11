---
title: 'ProximaX Tech Enero 2019'
media_order: 'PROXIMAX-TECH_ENERO-2019_english-1.jpg,PROXIMAX-TECH_JANUARY-2019_english - 1--1 (1) .jpg'
published: true
date: '02/16/2019 06:04 am'
publish_date: '02/16/2019 06:04 am'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talks'
twittercardoptions: summary
articleenabled: false
musiceventenabled: false
orgaenabled: false
orga:
    ratingValue: 2.5
orgaratingenabled: false
eventenabled: false
personenabled: false
restaurantenabled: false
restaurant:
    acceptsReservations: 'yes'
    priceRange: $
comments:
    enabled: true
---

## Blockchain, almacenamiento y redes de prueba en difusión

Recientemente, anunciamos el lanzamiento de nuestras redes de prueba de almacenamiento y streaming públicas, para el momento que fue escrito este blog, algunas de nuestras aplicaciones se encuentraban en proceso de ser migradas e integradas con dichas redes.

Para obtener más información sobre el almacenamiento público y las redes de prueba de streaming, visite las publicaciones más recientes de nuestro blog.

https://blog.proximax.io/storage-streaming-testnet-launch/
https://blog.proximax.io/proximax-sirius-blockchain-test-network/

Continuaremos usando estos entornos para organizar nuestros cambios. Al igual que la red de prueba pública de blockchain, agregaremos nuestros cambios semanalmente (preferiblemente todos los viernes). Una vez finalizados, animaremos a la comunidad a involucrarse aún más, invitando a los desarrolladores a crear aplicaciones sobre la plataforma.

## Documentos técnicos de alto nivel
Ahora también hemos publicado la primera versión de nuestro documento técnico, junto con documentos de investigación específicos de almacenamiento.

El informe técnico de alto nivel es una vista panorámica de todos los componentes de la plataforma. En esta primera versión, hemos explicado el diseño general de la plataforma y el funcionamiento de sus procesos internos.

Tenemos dos tipos de plataformas, privadas/autorizadas y públicas. La plataforma pública incluirá almacenamiento, streaming y super contracts. El privado/autorizado tiene un conjunto de funciones más controlado que incluye almacenamiento, streaming, base de datos y super contracts. Cada detalles se encuentra en el Whitepaper.

Además de la información sobre el diseño técnico de alto nivel, también hemos publicado los informes de referencia y de rastreabilidad de modelos para la capa de almacenamiento. Para más información, puede leer la publicación de nuestro blog.

https://blog.proximax.io/tech-papers/

Nuestro equipo continuará publicando más documentación a medida que avancemos con el desarrollo de la plataforma.

## Actualización de ProximaX Web Wallet
Desde el lanzamiento hace unos meses, hemos realizado mejoras importantes en la web wallet y hemos solucionado los problemas que han sido informados en: (https://trello.com/b/nVu5ZxqN/proximaxtestnetapps).

### Tablero de transacciones
* Se corrigió la duplicación de transacciones confirmadas y no confirmadas.
* Se añadió divisibilidad de mosaico a las cantidades.
* Se mejoró el rendimiento.
* La carga inicial es cuando el usuario inicia sesión.
* Una vez registradas, las transacciones y la información del mosaico se almacenan en caché.
* Una vez que se confirma una nueva transacción, se agrega y se guarda en el caché.
* Cuando el usuario se desconecta de la cartera, toda la información almacenada en el caché se destruye.

### Selección de nodos
* Hay un nodo predeterminado en un archivo json.
* El usuario puede agregar y seleccionar nuevos nodos.

### Directorio
* Se agregó el botón de cerrar en el modal.
* El mínimo de 6 caracteres a 2 caracteres se modificó en el campo de usuario.

### Cuenta
* Se validó que el campo de contraseña no esté vacío.
* El campo de contraseña se oculta cuando se muestra la clave privada; cuando se cierra la clave privada, se muestra nuevamente el campo de contraseña.

## Resumen
A continuación se muestra un resumen de lo que hemos completado en enero:

* Se lanzaron las redes públicas de prueba para almacenamiento y streaming.
* Se finalizó y publicó el documento técnico de alto nivel y la documentación de I + D.
* Se lanzó la aplicación ProximaX Suite.
* Arreglos de ProximaX Web wallet.