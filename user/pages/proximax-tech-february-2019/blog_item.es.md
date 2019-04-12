---
title: 'ProximaX Tech - Febrero 2019'
media_order: 'February-2019-tech-blog.jpg,ProximaX-Tokenomics-Flows.png,Screen-Shot-2019-03-11-at-5.50.34-AM.png,Screen-Shot-2019-03-11-at-5.18.03-AM.png'
metadata:
    Keywords: 'ProximaX, ProximaX Sirius, blockchain technology, Blockchain powered, Blockchain protocol, Distributed ledger technology, DLT, dlt, Distributed ledger, Decentralized database, Decentralized database technology, Decentralized storage, Decentralized storage technology, Decentralized supply chain, Decentralized streaming, Integrated and distributed ledger technology, IaDLt, Peer-to-peer technology, Peer to peer streaming, Peer to peer, Consensus mechanism, Consensus protocol, Asymmetric encryption, Data encryption, Off-chain storage, Off-chain streaming, Distributed File Management System, DFMS, Super Contract, Immutability, Data encryption, Encrypted by default, Permissioned, Permission based, Tokenomics, Token economics, Crypto trading, Cryptocurrency, Supply chain, CSD, Central Securities Depository, STO, Security Token Offering, Decentralized supply chain, STO, Private blockchain, DAapps, Decentralized applications, Blockchain apps, Streaming Layer, Streaming Node, Storage Layer, Storage Node, Sharded Information, Sharded Data, Use Case, Use Cases, Blockchain Consensus, Consensus Protocol, Enterprise Solution, Enterprise Solutions, System Integration, Transparency, Immutability, Irreversibility, Traceability, Proof of Bandwidth, Proof of Conflation Aggregate, Proof of Storage, Encryption, Data Security, Data Privacy, Cyber Security, Hackers, Hacking, Nodes, Public Chain, Private Chain, Hybrid Chain, Public & Private Chain, Catapult, SDK, SDKs, Software Development Kits, Super Contract, Super Contracts, Smart Contract, Smart Contracts, Peer-to-Peer , Peer-to-Peer Storage, Software-as-a-Service, SaaS, Lon Wong, PSP, PeerStream, PeerStream Protocol, Anonymous streaming, New Economic Model, New Economic Model Foundation, 482.solutions, Ministry of Community Development UAE, Dragonfly  Fintech, Xarcade, Testnet, Test network, Mainnet, Main network, Tokenomics, Token Economics, XPX, Crypto Currency, Crypto Currencies, Crypto Exchange, Crypto Exchanges, Bitcoin, Zero trust, Escrow, Onchain escrow, Trustless swaps, Trustless, Onion routing, SIM Identity attestation, ProximaX KYC, KYC, Know Your Customer, Know Your Counter Party, Onboarding Customer, Customer Onboarding, Identity Management, Identity Management System, Identity Verification, Identity Authentication, Anti-Money Laundering, AML, RegTech, Regulation Tech, Regulation Technology, GDPR, General Data Protection Regulation, EU GDPR, European Union GDPR, European Union General Data Protection Regulation, Knowyourcustomer, Compliance system, Compliance systems, , ProximaX Suite, Office Suite, Office Collaboration, Workforce Collaboration, Collaboration, Real Time Collaboration, Office suite, word processing, Office collaboration, File sharing, Decentralized file sharing, Real Time Editing, Office Productivity, Productivity, Office Applications, Microsoft Office, Word Processor, Word Processing, Microsoft Word Spreadsheet, Spreadsheets, Excel, Microsoft Excel, Presentation, Presentations, Microsoft Powerpoint, Powerpoint, Keynote, Collabora Office, LibreOffice, Collabora Productivity, Collabora Productivity Ltd,'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talk'
routable: true
cache_enable: true
visible: false
image:
    summary:
        enabled: '1'
        file: February-2019-tech-blog.jpg
    text:
        enabled: '1'
        file: February-2019-tech-blog.jpg
    width: 1200
    height: 800
---

## Desarrollo del núcleo

El equipo ha empleado todos sus esfuerzos en el progreso del desarrollo y de este modo asegurar el alcance de nuestras metas para éste año. Ha habido muchas discusiones internas sobre el enfoque de diseño, el uso adecuado de los patrones, los cambios en los esquemas de firmas y la investigación. Todos estos han ayudado a mejorar aún más nuestra plataforma. 

### Blockchain - fusionado con NEM Cow
NEM Tech (creado por Tech Bureau Corporation) actualiza continuamente su código de servidor y la actualización (Cow) ha sido una gran adición a nuestra fuente base. Para nosotros los aspectos más importantes de la actualización Cow son la estrategia de cálculo de fee y los diferentes esquemas de firma. La estrategia de cálculo de la fee se validará según el diseño de nuestra propia economía de tockens y se fusionará de acuerdo con nuestro mecanismo de incentivo.

![](ProximaX-Tokenomics-Flows.png)
Diagrama de alto nivel Token Economy con XPX y Stablecoin.

### Almacenamiento / DFMS
Nuestro enfoque principal para febrero ha sido refactorizar la plataforma de almacenamiento actual. Tenemos investigadores y auditores que mejoran continuamente nuestro código e implementaciones, validando los resultados de los principales cambios en nuestros patrones y convenciones principales. Con esta nueva estructura en su lugar, nos será más fácil ampliar y realizar modificaciones en la plataforma de almacenamiento, que también pueden ser utilizadas por los contribuyentes públicos una vez que estemos en funcionamiento (público).

Hemos puesto un gran énfasis en las funciones de la unidad/directorio. Básicamente, esta función permitirá a los clientes alquilar una cantidad de espacio predefinida, que puede utilizar para almacenar múltiples archivos y carpetas, independientemente de su cantidad y estructura. La única restricción es el tamaño de la unidad, pero se puede evitar esta limitación utilizando varias unidades.
  
También comenzamos a trabajar en nuestra documentación técnica de almacenamiento que compartiremos con la comunidad. La cual constará de todas las especificaciones técnicas y guías prácticas, que incluyen aquellas para nuestra API REST y SDK. El DFMS público tendrá su propio conjunto de SDK, comenzando con el DFMS GO SDK como una implementación de referencia. Este será el SDK principal que los clientes/DAapps usarán para comunicarse con la capa de almacenamiento y también se usará como un participante de cliente ligero en la red de almacenamiento.

![](Screen-Shot-2019-03-11-at-5.18.03-AM.png)
## Almacenamiento de archivos Vesting/Staking paper
Nos encontramos finalizando el almacenamiento de archivos. Este documento describirá el mecanismo de replanteo que se implementará para garantizar incentivos económicos justos. Estamos agregando esas nuevas actualizaciones a la documentación de diseño de alto nivel.

En resumen, reconsiderar el almacenamiento de archivos se basará en un esquema de replanteamiento dinámico. También, es una forma de realizar una  revisión de manera más equitativa y económicamente basada en la demanda local de almacenamiento. Es la acción de acumular un saldo de tokens XPX como depósito de seguridad para el derecho a participar como nodo de almacenamiento. El propósito de la adquisición de intereses es incentivar a los participantes de los nodos de almacenamiento para que proporcionen la mejor calidad de servicio posible a los usuarios de la plataforma. Este trabajo de investigación informa sobre los beneficios de implementar la adquisición de intereses de almacenamiento de archivos, y considera qué permutación sería más efectiva.

Muy pronto daremos más información sobre el tema en el documento.

## Programa de acceso temprano de red de prueba
A finales de marzo hasta principios de abril, se hará el lanzamiento de un programa de acceso temprano para desarrolladores que deseen nuestra red de prueba. Invitaremos algunas conexiones de primer a segundo grado, así como a empresas que quieran probar y construir aplicaciones sobre nuestra plataforma de red de prueba.

A partir de ahora, nos encontramos creando un flujo estructurado para el programa de acceso temprano. Asimismo, insistimos en limpiar todos los accesos, SDK y sistemas de soporte para manejar esta iniciativa.

## Actualización de ProximaX Web Wallet
Fueron realizadas modificaciones adicionales a la web wallet,  que adicionalmente ahora cualquiera puede acceder. 

Las actualizaciones incluyen:

1. Apoyo a la creación y modificación de mosaicos.
2. Soporte para la creación y modificación de namespaces.
3. Optimización del panel de transacciones.
4. Una solución para la lentitud al mostrar las transacciones.
5. Fue agregado el tipo de detalle de la transacción.
6. Registro de namespaces.
7. Cambio de suministro de mosaico.
8. Definición de mosaico.
9. Almacenamiento temporal de mosaicos y namespaces en caché por sesión.
10. Cambio de wallet de la interfaz de usuario.
11. Selección de mosaico agregado al módulo de transferencia.

Puede acceder al sitio web de la red de prueba a través del enlace siguiente:

http://bctestnetwallet.xpxsirius.io

Estamos actualizando continuamente nuestra web wallet para que esté a la par con nuestros cambios de blockchain. Pronto tendremos una aplicación basada en almacenamiento y streaming que complementará nuestras capas de almacenamiento y streaming.

## ProximaX Explorer - Aún más optimizado
Rediseñamos y reconstruimos el explorador para utilizar VueJs. Mejorando el rendimiento del explorador y ha recortado significativamente el tamaño de la distribución. Estas mejoras se realizaron para garantizar que nuestros clientes tengan una forma intuitiva de acceder a los datos del explorador de blockchain.

Estaremos agrupando este explorador con todas nuestras ofertas privadas/autorizadas en el futuro.

Puede acceder al explorador de red de prueba a través del enlace siguiente:

http://bctestnetexplorer.xpxsirius.io/


## En lo que trabajamos actualmente
### Prueba de concepto del sistema de identidad (PoC)
Hemos empezado a trabajar en un PoC del Sistema de Identidad. Esta es una solución genérica/abstracta que puede extenderse a través de un SDK para que los clientes puedan realizar procesos de validación a través de su aplicación o dispositivo (integrado).

El PoC del sistema de Identidad tiene 4 capas: comunicación de campo cercano (NFC), front-end, backend y la plataforma Sirius de ProximaX. Cuenta con registro, datos incrustados en NFC y almacenados en la plataforma Sirius de ProximaX, validación de datos fuera de línea a través de SDK y un formulario personalizable para habilitar extensiones.

Una demostración en vivo mostrando esta aplicación será lanzada pronto.


### Motor de flujo de trabajo
Además trabajamos en un motor de flujo de trabajo respaldado por la plataforma ProximaX Sirius como almacenamiento de estados de flujo de proceso inmutables. Esta es una aplicación extremadamente poderosa que permitirá a las empresas crear flujos altamente personalizables que aprovechan los contratos/complementos predefinidos incorporados de ProximaX.

![](Screen-Shot-2019-03-11-at-5.50.34-AM.png)

## Resumen
A continuacón se muestra un resumen de los progresos realizados en febrero:

* Actualización de la Cow NEM combinada con la plataforma Sirius de ProximaX.
* Mayor desarrollo de la tecnología de la capa de Almacenamiento/Streaming y el comienzo de la integración de modelos de economía de fichas.
* Almacenamiento de archivos. Adquisición de simulación e investigación.
* Introducción a la Iniciativa del Programa de Acceso Temprano a la Red de Pruebas.
* Sistema de identidad PoC y Motor de flujo de trabajo.