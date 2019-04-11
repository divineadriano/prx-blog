---
title: 'ProximaX Tech Noviembre 2018'
media_order: tech-november.png
published: true
date: '20-12-2018 05:44'
publish_date: '20-12-2018 05:44'
metadata:
    Keywords: 'ProximaX, ProximaX Sirius, blockchain technology, Blockchain powered, Blockchain protocol, Distributed ledger technology, DLT, dlt, Distributed ledger, Decentralized database, Decentralized database technology, Decentralized storage, Decentralized storage technology, Decentralized supply chain, Decentralized streaming, Integrated and distributed ledger technology, IaDLt, Peer-to-peer technology, Peer to peer streaming, Peer to peer, Consensus mechanism, Consensus protocol, Asymmetric encryption, Data encryption, Off-chain storage, Off-chain streaming, Distributed File Management System, DFMS, Super Contract, Immutability, Data encryption, Encrypted by default, Permissioned, Permission based, Tokenomics, Token economics, Crypto trading, Cryptocurrency, Supply chain, CSD, Central Securities Depository, STO, Security Token Offering, Decentralized supply chain, STO, Private blockchain, DAapps, Decentralized applications, Blockchain apps, Streaming Layer, Streaming Node, Storage Layer, Storage Node, Sharded Information, Sharded Data, Use Case, Use Cases, Blockchain Consensus, Consensus Protocol, Enterprise Solution, Enterprise Solutions, System Integration, Transparency, Immutability, Irreversibility, Traceability, Proof of Bandwidth, Proof of Conflation Aggregate, Proof of Storage, Encryption, Data Security, Data Privacy, Cyber Security, Hackers, Hacking, Nodes, Public Chain, Private Chain, Hybrid Chain, Public & Private Chain, Catapult, SDK, SDKs, Software Development Kits, Super Contract, Super Contracts, Smart Contract, Smart Contracts, Peer-to-Peer , Peer-to-Peer Storage, Software-as-a-Service, SaaS, Lon Wong, PSP, PeerStream, PeerStream Protocol, Anonymous streaming, New Economic Model, New Economic Model Foundation, 482.solutions, Ministry of Community Development UAE, Dragonfly  Fintech, Xarcade, Testnet, Test network, Mainnet, Main network, Tokenomics, Token Economics, XPX, Crypto Currency, Crypto Currencies, Crypto Exchange, Crypto Exchanges, Bitcoin, Zero trust, Escrow, Onchain escrow, Trustless swaps, Trustless, Onion routing, SIM Identity attestation, ProximaX KYC, KYC, Know Your Customer, Know Your Counter Party, Onboarding Customer, Customer Onboarding, Identity Management, Identity Management System, Identity Verification, Identity Authentication, Anti-Money Laundering, AML, RegTech, Regulation Tech, Regulation Technology, GDPR, General Data Protection Regulation, EU GDPR, European Union GDPR, European Union General Data Protection Regulation, Knowyourcustomer, Compliance system, Compliance systems, , ProximaX Suite, Office Suite, Office Collaboration, Workforce Collaboration, Collaboration, Real Time Collaboration, Office suite, word processing, Office collaboration, File sharing, Decentralized file sharing, Real Time Editing, Office Productivity, Productivity, Office Applications, Microsoft Office, Word Processor, Word Processing, Microsoft Word Spreadsheet, Spreadsheets, Excel, Microsoft Excel, Presentation, Presentations, Microsoft Powerpoint, Powerpoint, Keynote, Collabora Office, LibreOffice, Collabora Productivity, Collabora Productivity Ltd,'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talks'
slug: proximax-tech-noviembre-2018
image:
    summary:
        enabled: '1'
        file: tech-november.png
    text:
        enabled: '1'
        file: tech-november.png
    width: 1200
    height: 800
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

Nuestro equipo ha continuado  productivo y agresivo durante todo este mes con el lanzamiento de nuestra Blockchain Testnet y algunas aplicaciones de soporte. En este sentido, nos encontramos en el proceso de  creación de componentes de nodo de almacenamiento y streaming, así como los contratos que se necesitan como parte del ecosistema. Además, ahora tenemos una idea de cómo debería funcionar el Super Contract como parte de nuestra solución de plataforma mediante la utilización de nodos ejecutores y la Máquina Virtual ProximaX.

## Desarrollo del núcleo

### Capa de Blockchain
En noviembre dimos a conocer nuestro propio entorno blockchain de testnet, permitiéndonos organizar nuestros cambios al tiempo que se abre a la comunidad para un posible compromiso, el entorno testnet constantemente sera parcheado con nuestros cambios todos los viernes.

Transcurridas dos semanas a partir de su lanzamiento, serán realizados los siguientes cambios en el Catapult server y el API REST:

**23 de noviembre de 2018**

![Screen-Shot-2018-12-06-at-8.19.07-PM](/content/images/2018/12/Screen-Shot-2018-12-06-at-8.19.07-PM.png)

#### Explorer, Wallet y Faucet
Poco después de nuestro lanzamiento de testnet, publicamos una versión temprana del explorador, wallet y faucet; aplicaciones que serán mejoradas con regularidad por nuestro equipo hasta que finalmente se encuentren disponibles para la versión beta. A medida que se ejecutan los avances hacia el lanzamiento de la red principal, sentimos el agrado de animar a la comunidad a participar en las pruebas.

Enlaces de las aplicaciones:
* http://bctestnetexplorer.xpxsirius.io
* http://bctestnetwallet.xpxsirius.io
* http://bctestnetfaucet.xpxsirius.io

La comunidad puede dar su opinión a través de nuestra tablero público de Trello. Se hará un anuncio con las notas de lanzamiento para cada actualización.

### Capa de almacenamiento
El nodo de la capa de almacenamiento ahora se ha fusionado en un paquete conocido como "Go-XPX" que incluirá la integración de módulos de incorporación, aceptación, selección, creación de contrato (integrado al blockchain) y libp2p.

![47227875_10156575953103964_8867915694419738624_o](/content/images/2018/12/47227875_10156575953103964_8867915694419738624_o.jpg)

Esperamos lanzar la red de pruebas de almacenamiento que se integrará con la blockchain testnet a mediados de enero de 2019. La capa de almacenamiento tendrá todas las funciones básicas, excepto el mecanismo de consenso, esto significa que la selección del nodo se basará en la generación aleatoria mientras trabajamos para finalizar el sistema de reputación y el proceso de selección/mercado de PoCA.

![storage_lf](/content/images/2018/11/storage_lf.jpg)

Además, estamos introduciendo nuevos contratos específicamente para la capa de almacenamiento que serán construidos utilizando los complementos de ProximaX Sirius para crear una obligación contractual digital entre los nodos de host de almacenamiento, el verificador seleccionado y el cliente.

### Capa de Streaming
Esperamos presentar la testnet de la capa de streaming a principios del próximo año con descubrimiento y rutas integradas en los SDK.

#### Acerca de los actores / nodos de streaming
Todos los nodos están organizados en una red de malla sin conexión, donde algunos de ellos se encuentran conectados con sus vecinos inmediatos (vecindario virtual no relacionado con la ubicación física del nodo). Se puede llegar a otros a través de una cantidad mínima de saltos en todos los nodos donde cada uno mantiene su propia llave privada y comparte su llave pública como un registro público en un registro de usuarios de blockchain. Los nodos deben llevar al menos una (o varias) direcciones de punto final de acceso público para permitir que otros nodos y clientes accedan a este directamente cuando sea necesario.

#### Concepto de Streaming - Servicio de descubrimiento
Desde una perspectiva de seguridad, el proceso de descubrimiento de nodos debe ser independiente de cualquier nodo particular (para eliminar la posibilidad de que los nodos proporcionen una lista de nodos conocidos / comprometidos). Esto se puede implementar ya sea agregando una cantidad predefinida (para el cliente) administrados por socios de confianza o implementando un esquema de votación que defina una lista de nodos (utilizando proof of stake o proof of importance) para proporcionar el siguiente periodo fijo. Los nodos de descubrimiento elegidos actualmente deben publicarse en un nivel de blockchain y estar disponibles para que los clientes puedan retirar la lista completa en cualquier momento. Un cliente solo debe usar nodos de confianza para propósitos de descubrimiento (cuando estén disponibles) y cambiar a cualquier otro nodo conocido cuando ninguno de los nodos públicos de descubrimiento esté disponible. En general, todos los nodos deben ser detectables y el mecanismo de descubrimiento no debe limitar que ningún cliente (o cualquier otro nodo) reciba la lista completa de nodos. Todavía tenemos que definir el proceso de elección del nodo de descubrimiento.

#### Streaming - Registro de clientes y presencia en la red

Para que un cliente establezca su presencia en el sistema sin revelar su identidad, ocultamos el nodo de presencia del usuario desde su punto de entrada real. Un cliente registra uno o varios puntos de contacto para sí misma (llamamos a estos puntos "nodos de presencia"). Para hacer eso, un cliente descubre tres nodos independientes en la red, selecciona qué nodo se convierte en su nodo de entrada, cual se convierte en su nodo de presencia y utiliza la conexión telescópica en modo de capas. 


![Screen-Shot-2018-12-09-at-9.16.55-PM](/content/images/2018/12/Screen-Shot-2018-12-09-at-9.16.55-PM.png)

En el ejemplo anterior, Alice elige el nodo A como un nodo de entrada y el nodo C como su nodo de presencia. Inicialmente, Alice se conecta al nodo A de forma anónima, firmando la solicitud con la llave pública del nodo A. Este enlace se utiliza para establecer el intercambio de claves Diffe-Hellman creando una llave de sesión K entre Alice y A. Después de establecer una conexión segura, Alice solicita al nodo A que extienda la conexión en su nombre y llegue al nodo B (de manera similar a partir del registro del mensaje firmado por la llave pública del nodo B) y llegando al nodo C, donde Alice revela su identidad firmando el mensaje de registro con su propia llave privada (permitiendo que el nodo C, la verifique utilizando la llave pública del registro de blockchain). El nodo C luego se anuncia a sí mismo como el representante de la presencia de Alice en toda la red de nodos que utiliza el mecanismo de almacenamiento DHT mientras asigna algún tiempo de caducidad, puede renovar periódicamente el envío de registro de presencia para mantener eventos en vivo en ese canal. Alice debe poder registrar múltiples puntos finales de presencia por sí misma para fines de tolerancia a fallos y los clientes que la descubran deben poder elegir qué entradas son las más recientes  para comunicarse con uno o cualquiera de esos nodos.

![Screen-Shot-2018-12-09-at-9.16.28-PM](/content/images/2018/12/Screen-Shot-2018-12-09-at-9.16.28-PM.png)

### Super Contracts y Nodos Ejecutores
Hemos empezado a conceptualizar los Super Contracts, la idea principal es crear un contrato abstracto en la cadena de bloques de ProximaX Sirius y hacer que sea posible llamar un proceso externo "adjunto", que en este caso, es una máquina virtual específica de ProximaX que contendrá el código ejecutable.

Antes de iniciar cualquier proceso externo, se inicia un proceso de selección de mercado (PoCA) para buscar los nodos ejecutores disponibles con el fin de ejecutar el contrato digital (código). Cuando se selecciona un nodo ejecutor, extraerá la máquina virtual de un nodo de almacenamiento (a través de un hash), ejecutará el código y devolverá el estado de la cadena para la confirmación del contrato.

Continuaremos explorando y mejorando este concepto.


## Tecnología para White Papers
Tenemos una serie de white papers que debemos completar, entre ellos tenemos, un white paper de alto nivel, uno  de negocios, uno de PoCA y un white paper económico para token. Sin embargo, el equipo ha estado bastante atascado al tener que implementar los diversos componentes de la red.

Esperamos publicar algunos de estos trabajos para enero.


## Actualización del sitio web
Nuestro equipo de marketing está actualizando el sitio web de ProximaX y ahora estamos en la etapa de finalización. Otros anuncios se realizarán a través de nuestras redes sociales muy pronto.

## Demostraciones

### 482.solutions IoT
482.solutions ha estado trabajando con nosotros desde agosto de este año. Recientemente, presentaron el uso de ProximaX en Kiev, donde un dispositivo arduino envía datos de telemetría a la plataforma ProximaX, donde los registros están sellados y almacenados en la blockchain + almacenamiento.
 
![Screen-Shot-2018-12-09-at-9.25.09-PM](/content/images/2018/12/Screen-Shot-2018-12-09-at-9.25.09-PM.png)

![Screen-Shot-2018-12-09-at-9.25.20-PM](/content/images/2018/12/Screen-Shot-2018-12-09-at-9.25.20-PM.png)

Podrás ver la presentación en el siguiente enlace: https://docs.google.com/presentation/d/14OHfrmbw6Il7-S-6Zkd8BbDmapCaEJKfCkEKDZEEkis/edit#slide=id.g48048a523d_0_11

Para ver más:

https://www.facebook.com/482.solutions/videos/727007884321072/UzpfSTcxMzY3ODk2MzoxMDE1NjU3MjY0NTgzMzk2NA/

### Omniaz Blockchain + IoT
Omniaz realizó un evento en Singapur donde exhibieron su dispositivo Blockchain + IoT.

Para conocer  más sobre este evento entra a éste enlace:
https://www.youtube.com/watch?v=VxfWqgh9IkQ

## Resumen
A continuación presentaremos un resumen de lo realizado en el mes de noviembre:

* Se ha continuado desarrollando los componentes necesarios para soportar la plataforma central, como PDP, PoRep y la implementación de componentes de almacenamiento.
* as aplicaciones tienen un gran avance.
* Socios y clientes han comenzado a crear aplicaciones utilizando nuestra oferta privada.
* Ciclo de vida de almacenamiento.
* Lanzamiento de blockchain testnet.
* Lanzamiento de Blockchain testnet, faucet, wallet yexplorador.
* Desarrollando soluciones para clientes.
* Demostraciones clave de proyectos de IoT.
