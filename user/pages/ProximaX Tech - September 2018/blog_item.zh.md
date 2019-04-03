---
title: 'ProximaX Tech - Septiembre 2018'
media_order: tech-september.png
published: true
date: '18-11-2018 05:35'
publish_date: '18-11-2018 05:35'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talks'
image:
    summary:
        enabled: '1'
        file: tech-september.png
    text:
        enabled: '1'
        file: tech-september.png
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

Durante el mes de septiembre estaremos centrados en finalizar la mayoría de nuestras aplicaciones, igualmente la investigación sobre la plataforma central, las cuales se encuentran en UAT o en etapa de pre-producción. El estudio sobre la plataforma central ha sido continuo, paralelo al desarrollo de sus respectivos módulos.

Serán facilitadas breves actualizaciones sobre lo que se ha realizado durante el mes de septiembre y algunas claves sobre la plataforma y las aplicaciones.

## Estatus del desarrollo - Core de la plataforma 
Nuestra investigación se ha centrado principalmente en consolidar el enfoque, incluyendo el conjunto de actores, módulos, flujo de datos, el token y el consenso. Su alcance es  bastante amplio para una publicación de blog, de igual manera se dedicará un apartado completo con el fin de compartir el diseño de alto nivel, los esquemas de consenso y un whitepaper sobre una actualización por separado en el mes de octubre.

### Plataforma ProximaX - Sirius
El nombre en clave para la plataforma que se está desplegando se denomina **Sirius**, es tomada de las diez estrellas más brillantes de nuestra galaxia, representando aquello que se desea lograr. El lanzamiento inicial definirá a ProximaX como la más brillante entre todas. 

El ecosistema de ProximaX gira en torno a los **actores** de nuestra red, en este sentido  los nodos trabajarán juntos para lograr ofrecer los servicios de nuestra  plataforma.

![eco_1](/content/images/2018/10/eco_1.png)

A continuación se muestra una descripción de cada uno de los actores del ecosistema de la red.

#### Los nodos de la blockchain 
Catapult, es una poderosa blockchain que  actualmente se encuentra en una versión privada y su mecanismo de consenso no está optimizado para el despliegue público. En consecuencia, estamos implementando un mecanismo que hace referencia a la implementación de NXT. Los mismos se utilizarán principalmente como un registro de todas las transacciones en todo el ecosistema, incluyendo información de nodos, estadísticas, configuración y datos funcionales, incentivos, transacciones y contratos. Nuestro flujo de datos del ecosistema se basa totalmente en los nodos de la blockchain. 

Con Catapult de NEM, se podrá aprovechar las reglas y lógica de negocios predefinidas / integradas, el mecanismo de complementos, se utilizará para almacenar estadísticas de prueba y entradas de reputación, también se aplicará una Proof of Conflation Aggregate y Selection and Market. Para el mes de septiembre, se construirá un diseño con las características de Catapult y sus usos, cuyo  propósito será respaldar nuestro ecosistema de nodos de almacenamiento y transmisión.

El lanzamiento inicial de Sirius será únicamente en base a los nodos de Catapult, ya que nuestra principal tecnología de contabilidad alimenta a todos los nodos y servicios posteriores para el  lanzamiento de este testnet, siendo necesaria cierta participación pública, también se espera que la comunidad se encuentre a la expectativa con el anuncio a modo contribuir con la aprobación de la red.
 
#### Nodos de almacenamiento - host, verificadores y replicadores.
Los contribuyentes de almacenamiento serán diferentes de los nodos de la blockchain, serán principalmente el punto focal de nuestra visión para el almacenamiento descentralizado,teniendo un mecanismo de integración que les permitirá participar en la red y establecer su modelo de ingresos según sus preferencias. Una vez a bordo, se incluirán en el mercado en su disponibilidad de almacenamiento que luego se expondrá a diferentes consumidores.

![storage_node1](/content/images/2018/10/storage_node1.png)

Cada uno de los nodos de almacenamiento serán verificados, probados y desafiados, asimismo tendrán su propia reputación basada en la Collection of Proof. Utilizando varios mecanismos incluida la Proof of Data Possession, Space/Time, además de la replicación y ancho de banda para garantizar la coherencia y la buena reputación en la red.

![pdp_challenge](/content/images/2018/10/pdp_challenge.png)

Los verificadores y replicadores igualmente son nodos de almacenamiento, una vez que están en la red, serán desafiados periódicamente por un conjunto de verificadores, quienes a su salida se incorporan al sistema de reputación que se está construyendo y serán la base del proceso de selección. Los replicadores, por otro lado, son un conjunto de nodos seleccionados al azar que aceptan ser un replicador de archivos. Al igual que los nodos de almacenamiento, también serán cuestionados y verificados, no con la misma frecuencia que el host real de los archivos.

#### Los Nodos de streaming
Todos los nodos de transmisión se organizan en una red de malla sin conexión, en donde algunos se unen con nodos vecinos a su vez diseñados para mantener las conexiones de entrenudos siempre que sea  necesario para así descartar las conexiones no utilizadas y de esta manera restablecerlos nuevamente cuando sea necesario. Algunos serán accesibles públicamente para las ProppaX DApps a través de una o varias interfaces de red pública, donde servirán solo como nodos internos y se usarán para saltos provisionales en el sistema.

![streaming](/content/images/2018/10/streaming.png)

El equipo trabaja fundamentalmente en culminar el protocolo de enrutamiento tipo cebolla (capas) como principal anuncio para nuestros clientes. Cada una de las entidades dentro del ecosistema de transmisión se utilizará para buscar y asegurar la mensajería privada, entre tanto, el desarrollo de nodos y el Cliente / SDK está en progreso, dando inicio al trabajo de construcción de la pieza de transmisión de audio / video. De manera similar al almacenamiento, también se ha comenzado a construir la integración de la blockchain que continuará hasta el mes de octubre.

#### Executor Nodes - Super Contracts
Como cuarto actor tenemos a los nodos ejecutores, quienes incluso pueden ser un nodo de almacenamiento. Hacia finales de septiembre, el equipo inició algunas discusiones preliminares e investigó sobre cómo extender e implementar una solución de Intelligence Contract  con un enfoque completamente diferente a las soluciones actuales de este concepto, siendo algo prohibitivas al implementarse de manera práctica. Llamaremos a esta versión aumentada y modificada, **"Super Contract"** con el fin de diferenciarnos de los proyectos existentes del Intelligence Contract  sin formar parte primera versión de ProximaX y que sea parte de la próxima iteración.

Una vez sea implementado, se abrirá una gran oportunidad para que los desarrolladores de aplicaciones usen la plataforma para su soluciones descentralizadas. Presentaremos tecnologías administradas por contenedor, así como, potencialmente, construiremos nuestro propio lenguaje de scripting para permitir a los desarrolladores crear códigos ejecutables, utilizando un Sistema de gestión de archivos distribuidos ("DFMS") que son ejecutados por los nodos ejecutores.

A pesar de que aún es pronto, tenemos documentos de investigación convincentes y nuestros expertos tienen experiencia en la construcción de conjuntos de tecnología. Haremos el mejor esfuerzo para proporcionar más información durante los próximos meses una vez que culminadas nuestras ofertas principales.

### Proof of Conflation Aggregate Selection and Market 
Un novedoso concepto que se introduce es la Selección de Mercado PoCA. Básicamente es un sistema de subasta que será utilizado por la red para determinar los mejores nodos que pueden adecuar la solicitud e incorpora todas las estadísticas, incluida la puntuación de reputación basada en la Prueba de X, los precios de mercado, la ubicación, etc., los cuales se utilizan para determinar los mejores nodos disponibles para un trabajo determinado.

Se ha culminado el diseño y los parámetros necesarios para PoCA, también se ha iniciado la construcción de algunos de los componentes necesarios para dicho módulo. Nuestro objetivo es proporcionar un documento más técnico y de profundidad para finales de mes.

### Token Economic Fit on Storage and Simulation
Tenemos la suerte de contar con investigadores que analizan en profundidad nuestros requisitos e incorporan la visión que tenemos al usar el token como parte del ecosistema de ProximaX. Como se mencionó en la actualización del mes pasado, buscaban usar un token estable que representará el "poder" de ProximaX.

Para cada solicitud hecha por el cliente los tockens son necesarios, cuando el usuario exige un servicio, la aplicación cliente debe aceptar tokens de servicio y asignar a los ganadores de la subasta como tokens bloqueados. Si el servicio se implementó correctamente, el token se desbloqueará y distribuirá entre los verificadores y los nodos de almacenamiento según un acuerdo.

En caso de surgir algún conflicto durante el curso del servicio, el mismo será anulado con el primer proveedor, un verificador otorgará el token bloqueado a otro nodo de almacenamiento. También proporciona una nueva subasta y asigna los tokens bloqueados (o parte de ella) a otro nodo de almacenamiento,  el método de reasignación proporciona la continuidad de un servicio pagado. Se utilizará un conjunto de criterios para determinar si un nodo de almacenamiento puede cumplir o no con su obligación. Este modelo deberá estar bien definido y ser sólido para no penalizar erróneamente a un nodo por falta de rendimiento.

En sentido ascendente, la subasta para ganar el aprovisionamiento del servicio también debe diseñarse contra cualquier comportamiento malicioso. Para ello, los verificadores realizarán pruebas para garantizar que se alcance un consenso en el que los nodos de almacenamiento no hagan trampa o parezcan poder proporcionar el servicio cuando no puedan hacerlo.

Tenemos una simulación inicial de esta distribución de tokens a los actores en un caso de uso comercial y esperamos proporcionar más información al respecto en los próximos meses.

## Desarrollo de aplicaciones
La mayoría de las aplicaciones que hemos estado desarrollando se realizan de manera funcional, pero casi todas están pasando de la versión NIS1 a Catapult. A continuación, se encuentran algunas de las siguientes actualizaciones clave que tenemos.

### ProxiDocs a ProxiSuite
ProxiSuite es una aplicación de oficina basada en NextCloud, OnlyOffice e integrada con la tecnología ProximaX. La suite ofimática es totalmente capaz de admitir la gestión de documentos en tiempo real basada en archivos de documentos de Microsoft / Open Office. La extensión OnlyOffice se encuentra respaldada por la tecnología Proximax permitiéndo a los usuarios crear y administrar sus documentos mediante el almacenamiento descentralizado y el mecanismo de encriptación blockchain. Podemos decidir cambiar el nombre de ProxiSuite en una fecha posterior a través de una competencia una vez que haya claridad sobre las funciones de la aplicación.

![proxisuite_1](/content/images/2018/10/proxisuite_1.png)

Lanzaremos una versión pública pronto.

### ProxiBox UI mejoras de interfaz de usuario y pruebas
Trabajamos en la optimización de la interfaz de usuario y migrar la biblioteca a Catapult y actualmente  en establecer el modelo de ingresos. Eventualmente, esto se integrará en el ProxiSuite.

<p style="text-align: center;">Dark ProxiBox Theme</p>

![proxibox_2](/content/images/2018/10/proxibox_2.png)

<p style="text-align: center;">Light ProxiBox Theme</p>

![proxibox_3](/content/images/2018/10/proxibox_3.png)

### De Pad a ProxiNote
ProxiNote es otra herramienta de utilidad en construcción que permitirá a los usuarios cifrar completamente y asegurar sus notas. 

![proxinote_3](/content/images/2018/10/proxinote_3.jpg)

El plan a largo plazo es construir una interfaz de usuario web  y nuevamente ser absorbido por ProxySuite. Esta es una versión más simple de Evernote pero con un potente cifrado a nivel de blockchain.

### ProxiForms - Framework y Middleware
ProxiForm es un marco de herramientas empresariales y de desarrollo de aplicaciones que permite a sus usuarios crearlas basadas en formularios respaldadas por blockchain, este es un gran proyecto para construir un marco basado en formularios apoyados por tecnologías descentralizadas como Catapult y BigChainDB. El resultado final, una vez implementado proporcionará una herramienta para crear algunos formularios simples, como formularios de encuestas para procesos de flujo de trabajo complejos, utilizando las firmas multiagregadas de Catapult.

![proxiform_1](/content/images/2018/10/proxiform_1.png)

Estamos evaluando el conjunto de tecnologías para este marco. La característica más convincente de proxiform es el conjunto de middleware.


## Proyectos de contribución continua
ProximaX como compañía, también contribuye al proyecto Catapult de NEM. A continuación se presentan otras colaboraciones realizadas a NEM.

### Catapult Desktop Wallet
Estamos colaborando con una Proximax Catapult Desktop Wallet que puede utilizarse para administrar nuestras monedas, particularmente, las monedas XPX, que aún se encuentra en desarrollo, sin embargo contamos con algunas pantallas para mostrar su progreso.

![wallet_1](/content/images/2018/10/wallet_1.png)

Una vez concluido, se realizará éste aporte al público, con la finalidad de que todos puedan usar nuestra poderosa desktop wallet y extender sus funcionalidades para su propio uso.

La desktop wallet no es una wallet común, se elabora un marco y un servicio de SDK para que cualquiera pueda extenderlo y usarlo para su propio conjunto de aplicaciones. Cualquiera puede desarrollar utilizando nuestro marco de plugins en Typescript /javascript para personalizar la Wallet.

### Catapult SDKs
Igualmente se están creando tres SDK de Catapult  como nuestro aporte a la tecnología de la Fundación NEM, escrito en Golang, Python y Swift 4.

Básicamente, significa que una vez publicados los SDKs , los desarrolladores de la plataforma podrán usarlos para construir potentes aplicaciones sobre la cadena de bloques de Catapult.

Pronto disponibles.

https://github.com/proximax-storage/nem2-sdk-swift
https://github.com/proximax-storage/nem2-sdk-python
https://github.com/proximax-storage/nem2-sdk-go

## Al finalizar el mes septiembre
Estamos felices del buen progreso que ha tenido el desarrollo central, se ha comenzado a edificar algunos componentes de diseño relacionados con la plataforma ProximaX que en general consolida la arquitectura de desarrollo. 

Seguidamente se mencionará lo realizado durante septiembre:

* SDK de Storage en Java, Typescript / Javascript está completo al 90%. La mayoría de nuestras aplicaciones en este momento están migrando del uso de NIS1 SDK al nuevo Storage SDK.
* PoC de los algoritmos de consenso.
* Proceso de incorporación de nodos
* Edificio de sistema de reputación para nodos de almacenamiento.
* Continuar construyendo los componentes de la capa de almacenamiento
* Continuar construyendo los componentes de la capa de transmisión
