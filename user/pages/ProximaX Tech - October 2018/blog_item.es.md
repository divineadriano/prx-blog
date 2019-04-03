---
title: 'ProximaX Tech - Octubre 2018'
media_order: tech-october.png
published: true
date: '18-11-2018 05:45'
publish_date: '18-11-2018 05:45'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talks'
image:
    summary:
        enabled: '1'
        file: tech-october.png
    text:
        enabled: '1'
        file: tech-october.png
    width: 900
    height: 600
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

El mes de octubre se hace más interesante para nuestra tecnología. Muchas de las aplicaciones en construcción se encuentran en estos momentos en su etapa final de prueba.

## Meetup de desarrolladores de tecnología
Se llevó a cabo nuestro primer meetup de desarrolladores a principios de mes, donde el CEO Lon Wong  junto al  CTO Alvin Reyes, conversaron en relación a los beneficios de la plataforma ProximaX y del enorme impacto que puede generarse en los procesos de negocios. Wong describió los diversos componentes críticos de la oferta y por otra parte  una descripción general de los componentes de alto nivel de ProximaX además del estado de desarrollo y las próximas actualizaciones.

![index](/content/images/2018/11/index.jpg)

Presentaciones en PDF:
* [ProximaX Overview](https://ipfs.io/ipfs/QmapKy64pU9CkyyGWxKSTL9yhPfS5CUxdYrpWgoEXAvVxF/20181012%20NBC.pdf)
* [ProximaX Technology Stack Overview](https://ipfs.io/ipfs/QmcGx7tWF3fGNrwkQQVR3Y6AoMGER9MxSo5y2qUbMnQVWr/Technical%20PPT.pdf)


## Actualizaciones básicas del Core

### ProximaX Sirius Blockchain
Es un orgullo anunciar que la red Blockchain de TESTNET  va encaminada a estar cada vez mejor equipada, continuamente se impulsan los cambios centrales, además de encontrarnos en el tramo final de parchear el núcleo de Catapult. Nuestro plan abarca el equipamiento de cinco nodos TESTNET blockchain con disponiblidad al público junto a otras herramientas. Y que además serán las bases de prueba para verificar los cambios de Catapult. Asi mismo, se incrementaran sustancialmente el número de nodos a medida de que finalicen, de esta manera ir creando otro anuncio específicamente para nuestro Testnet. Cada lanzamiento que se haga será documentado y anunciado para mayor transparencia.

Con Catapult de NEM, podemos crear una separación de nuestros cambios con respecto a los suyos además  del mecanismo de complementos, podemos extender nuevos tipos de transacciones específicas de ProximaX que serán cruciales para el sistema en general. 

### Aceptador a PDP / PoREP
Se ha puesto todo el empeño para la realización del aceptador, la Proof of Data Possession (PDP) y la Proof of Replication (PoREP), encontrándose en fase de prueba. En este sentido, el aceptador es el componente principal que captura las solicitudes de carga que a la vez, se envían al nodo. Una vez seleccionado, pasa por el proceso de verificación y un mecanismo de desafío continuo para hacer una prueba de posesión de datos.

![acceptor](/content/images/2018/11/acceptor.jpg)

Un esquema de **Proof of Data Possession** permite a un cliente que ha almacenado datos en un servidor no confiable verificar que el servidor posee los datos originales sin recuperarlos o almacenar una copia por sí mismo. Esto se logra generando pruebas probabilísticas utilizando un protocolo interactivo con el servidor remoto.

![Screen-Shot-2018-11-09-at-1.56.00-AM](/content/images/2018/11/Screen-Shot-2018-11-09-at-1.56.00-AM.png)

Cuando el servidor responde al challenge/proofs, es un proceso obligatorio que de no hacerse representaría una pérdida de datos, afectando la reputación del hosts, teniendo menor posibilidad de atender la solicitud de los clientes. Sin embargo, a pesar de ello, el servidor aún puede engañar al sistema al convencer al verificador de que aún posee el archivo. El motivo del mal comportamiento del servidor puede ser diverso e incluye reclamar el almacenamiento al descartar datos sin acceso o que rara vez se accede (por razones monetarias), u ocultar un incidente de pérdida de datos (debido a errores de administración, fallos de hardware, compromiso por ataques externos o internos). , etc).

El objetivo de un esquema de PDP que logra una prueba probabilística de la posesión de datos es detectar el mal comportamiento del servidor cuando el servidor ha eliminado una fracción del archivo. Hay varios enfoques que estamos haciendo sobre cómo estamos manejando tal comportamiento y tendremos una amplia cobertura en uno de nuestros documentos técnicos que publicaremos pronto.

**La Proof of Replication** es similar, el desafío consistirá en un defensor que respalde una afirmación verificable públicamente que dedica recursos únicos para almacenar una o más réplicas recuperables de un archivo de datos. Al verlo desde una vista de birdseye, cuando el cliente desea que se replique un archivo, al iniciar una solicitud de replicación (que está habilitada de manera predeterminada), elige un host y un conjunto de verificadores (% de red dentro de la vecindad), los verificadores son quienes desafían a los replicadores (probadores) si mantienen el archivo utilizando un conjunto de desafío que debe resolverse en un marco de tiempo determinado. Hay varios atributos aquí que en realidad son similares a PDP, pero la diferencia es que PoRep es una combinación de Proof of Retrievability y Proof of Space. Las 2 pruebas deben cumplirse para que un nodo pruebe que tiene el archivo.

Ambos conceptos son solo uno de los algoritmos de consenso que se están elaborando en la capa de almacenamiento de ProximaX como una forma de administrar las pruebas entre el host y los replicadores, comprobados por los verificadores del sistema (que también son otros nodos). Un resumen más extenso estará disponible en nuestro documento técnico de consenso.


### Key Concept: Storage Lifecycle
Se encuentra finalizada la implementación inicial de nuestra integración de almacenamiento,  en este sentido también se ha definido la comprensión del ciclo de vida de un nodo de almacenamiento, próximamente habrá una amplia cobertura sobre este tema en otra publicación del blog y en nuestro documento técnico. A continuación se muestra un resumen del proceso.

**Inicio: Storage Node Onboarding**

Cuando un usuario desea participar aportando espacio en el disco, el usuario primero debe participar en la red, deben darse varios pasos antes de lograr una participación exitosa, un colaborador de almacenamiento debe ejecutar una CLI que luego evaluará el almacenamiento y el espacio en disco. 

La información será recolectada y enviada a la red para su verificación. El verificador más cercano luego desafía al nodo a probar que tiene la cantidad de espacio. El protocolo se basa en un rompecabezas sobre gráficos difíciles de guijarros. Una vez verificado, el nodo puede usar un activo de mosaico de almacenamiento que se registrará en la selección de POCA-Market.

* El nodo asigna algo de espacio en el disco para usarse como almacenamiento y lo envía a la solicitud de verificación de la red.
* El verificador ejecuta el protocolo interactivo, que requiere un nodo para probar la capacidad de usar dicha cantidad de espacio. Un protocolo se basa en el rompecabezas sobre gráficos difíciles de guijarros.
* Si el almacenamiento pasa este protocolo, un nodo puede usar un activo de mosaico de almacenamiento en POCA-Market para el almacenamiento.

**Trabajando: Procesando peticiones de clientes**

Una vez que se incorpora un nodo de almacenamiento, ahora puede procesar las solicitudes de los clientes, el nodo publica su precio por GB o está de acuerdo con el precio de todo el sistema establecido por ProximaX. Una vez que se establece el modelo de ingresos, se incluirá como parte de la lista de participantes que forma parte del proceso de selección de mercado. Cuando el nodo se convierta en participante, tendrá una reputación que puede cambiar dependiendo de numerosos factores, como las apuestas, el almacenamiento disponible, el ancho de banda, los precios competitivos y las estadísticas de los verificadores informados.

* El Nodo publica su precio por GB o está de acuerdo con los precios establecidos en todo el sistema por ProximaX.
* Luego, puede participar en el mercado y ser seleccionado como proveedor de almacenamiento o verificador de otros nodos, de acuerdo con el contrato de almacenamiento, que se describirá en el siguiente capítulo.
* Durante este trabajo, el nodo de almacenamiento puede recibir y perder reputación, se utiliza como parámetro para determinar una prioridad de los proveedores.

**Fin: Ending of the node lifecycle.**

Cuando un nodo se desconecta, puede pasar sus funciones a otros nodos,  es posible que ellos pasen un contrato actual a otro nodo que pueda continuar el trabajo del nodo externo. 

* Un nodo simplemente puede dejar de anunciarse como proveedor de almacenamiento y pasar las tareas de un contrato actual a otro nodo.

### Reputación: Mercado PoCA / Selección
El ecosistema de nodos de ProximaX se ejecuta en diferentes redes, todos los actores dentro de él tienen una reputación, luego de meses de diseño y discusiones estamos preparados para construir este sistema. Tal característica es utilizada por un mecanismo de selección: un agente con menor notoriedad tiene menos posibilidades de ser seleccionado; la reputación de derechos adquiridos nos da un mecanismo, lo que hace que sea óptimo para los usuarios tener una identidad y atención para no ser excluidos del consenso del grupo.

Cuando un cliente específico solicita un servicio (almacenamiento), el punto de inicio del nodo ejecuta una subasta descentralizada en el mercado al detectar el mejor nodo siguiente para adaptarse a la solicitud.

Cada nodo mantiene una tabla de mercado para cada tipo de servicio donde tiene:
* adirección de la cuenta, y un nodo asociado
* Punto final del nodo que proporciona un servicio
* Cantidad de servicios prestados (GB para almacenamiento de archivos, verificación de espacio, subasta de contenido y auditoría, etc.)
* Marcas de precios
* Ubicación
* Reputación (estadísticas anteriores si las hay)
* Node Stake: pronto tendremos más detalles sobre el replanteo

Todos se ejecutan en un complejo algoritmo de saludo y conciliación entre un comprador específico (consumidor de servicios) y un vendedor (proveedor de servicios).

### SDK de blockchain
Es importante mantener Informado al público de nuestras contribuciones a Catapult mediante la creación de SDK para plataformas específicas, que además se le dará continuidad. En octubre lanzamos "Go" y "Swift" SDK, también informamos de la creación de Python SDK y posiblemente, analizamos la creación de Ruby y Rust SDK.

* https://github.com/proximax-storage/nem2-sdk-go
* https://github.com/proximax-storage/nem2-sdk-swift

Python SDK se encuentra en desarrollo, además colaboramos con la Fundación NEM para construirlo.


### Papel blanco / técnico y actualizaciones de la hoja de ruta
Poseemos algunos documentos técnicos en línea, que actualmente están en revisión para para posteriormente ofrecer los detalles técnicos de dichos documentos de cada uno de los componentes, que serán otorgados al público tan pronto sean concluidos. 

Debido a los cambios presentados, hemos decidido actualizar nuestra hoja de ruta junto a las nuevas actualizaciones que próximamente se estarán publicando, una vez efectuado se mostrará al público el camino hacia el éxito que estaremos ofreciendo. Actualmente nuestro sitio web se encuentra en proceso de renovación.

## Actualizaciones de desarrollo de aplicaciones

### ProxiBox, Notes and Keepass
ProxiBox, Notes y Vault se encuentran ahora en su etapa final de desarrollo / prueba. ProxiBox será renombrado como ProximaX File It! y Keepass se conocerá como ProximaX Vault. Actualmente se elabora el modelo de ingresos y licencias que, a su vez, se utilizará para comercializar los productos. El equipo interno realiza todas las pruebas necesarias para garantizar que todas las funciones básicas estén óptimas. File it! Notes y Vault serán compatibles con Windows, MacOS y sistemas basados en Linux.

Próxima actualización:
* Para construir campañas de marketing.
* Para incorporar el mecanismo de licencias y la construcción e introducción del modelo de ingresos.

![index-1](/content/images/2018/11/index-1.jpg)

![index1](/content/images/2018/11/index1.jpg)

### ProximaX Suite
La office suite se basa en NextCloud / OnlyOffice. ProximaX Suite es una aplicación completa de oficina de extremo a extremo que se ubica en la cima de la nube, respaldada por nuestro servicio de infraestructura segura de Catapult y DFMS.

Puede registrarse y probar la ProximaX Suite en:

https://suite.proximax.io

Esta versión solo permite 20 usuarios concurrentes a la vez.

Próxima actualización:
* Lanzamiento del playground para la ProximaX Suite. 
* Campaña de marketing para correr la voz sobre la aplicación.
* Explorar oportunidades de comercialización.
* Inclusión de nuestra oferta comercial.


### Actualizaciones notables y lo que hay en la tubería
Presentamos algunas de las actualizaciones notables en la rama de desarrollo de aplicaciones.

* ProximaX Descktop Wallet con apostilla, administrador de archivos y módulos de votación.
* ProximaX Blockchain Explorer
* ProximaX Apostilla (ProxiNotary)
* ProximaX ERP – Se espera un largo ciclo de desarrollo

Estas son solo algunas de las aplicaciones que se han estado desarrollando y muy pronto nuestro equipo mostrará una actualización.


## Alianza Tecnológica y Proyecto IoT
Hemos estado trabajando con 482 soluciones para construir el núcleo con la intención de crear una relación sólida con ellos. Además de ayudarnos a crear la plataforma, también  se llevan a cabo discusiones preliminares sobre la construcción de un proyecto de IoT.  Se Compartirán los detalles tan pronto se tenga algo de tracción, sencillamente, la idea es un sistema de cierre de puerta inteligente basado en la cadena de bloques ProximaX Sirius.

![Screen-Shot-2018-11-06-at-10.31.29-PM-1](/content/images/2018/11/Screen-Shot-2018-11-06-at-10.31.29-PM-1.png)

## Desarrollando soluciones. Proporcionando ayuda.
Nuestro excelente equipo proporciona soluciones y soporte para los siguientes clientes:

### CashCart
CashCart aprovechó nuestra instancia de ProximaX Sirius Private Blockchain y en este momento la utiliza en su plataforma de compras en línea Enterprise con su propio sistema de recompensas confiado y descentralizado. Además se ha establecido una relación sólida mediante la firma de un MoA que nos brinda una base firme de conocimiento y adopción de ProximaX en Filipinas

![Screen-Shot-2018-11-06-at-11.19.54-PM](/content/images/2018/11/Screen-Shot-2018-11-06-at-11.19.54-PM.png)

Con la cooperación de CashCart, podrá difundirse mayor información sobre la tecnología ProximaX en Filipinas. Se Llevará a cabo la capacitación técnica de ProximaX a través de su extensa academia de coaching para ayudar a las personas a aprender la tecnología detrás de ProximaX y construir comunidades para expandir nuestra marca a través de Filipinas.

### Omniaz
Omniaz, al igual que CashCart, utilizará nuestra instancia de blockchain de ProximaX Sirius para manejar millones de SKU. Hemos creado una instancia altamente personalizada para garantizar que pueda manejarse la cantidad de entradas y transacciones necesarias para adaptarse a los millones de SKU que se incorporan al sistema.

![Screen-Shot-2018-11-06-at-11.19.40-PM](/content/images/2018/11/Screen-Shot-2018-11-06-at-11.19.40-PM.png)


## En resumen

Nos complace el gran progreso del desarrollo central, desde ya comenzando a crear el código para admitir el mecanismo de almacenamiento, los cambios de PoS Blockchain y el enfoque de prueba de ancho de banda para transmisión en vivo.

A continuación mencionaremos nuestras actividades efectuadas en el mes de octubre:

* Catapult SDKs Go y Swift
* Implementación de PDP, PoRep y Componentes de Almacenamiento.
* Ciclo de vida del almacenamiento
* ProximaX Sirius PoS Peer Review y la ejecución del lanzamiento de blockchain TESTNET
* Desarrollo de Soluciones para Clientes
* Inicio de la exploración de oportunidades potenciales de proyectos de IoT.
