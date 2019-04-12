---
title: 'Lanzamiento de ProximaX Storage y Streaming Test Networks'
media_order: shutterstock_129321458.jpg
published: true
date: '28-01-2019 05:54'
publish_date: '28-01-2019 05:54'
metadata:
    Keywords: 'ProximaX, ProximaX Sirius, blockchain technology, Blockchain powered, Blockchain protocol, Distributed ledger technology, DLT, dlt, Distributed ledger, Decentralized database, Decentralized database technology, Decentralized storage, Decentralized storage technology, Decentralized supply chain, Decentralized streaming, Integrated and distributed ledger technology, IaDLt, Peer-to-peer technology, Peer to peer streaming, Peer to peer, Consensus mechanism, Consensus protocol, Asymmetric encryption, Data encryption, Off-chain storage, Off-chain streaming, Distributed File Management System, DFMS, Super Contract, Immutability, Data encryption, Encrypted by default, Permissioned, Permission based, Tokenomics, Token economics, Crypto trading, Cryptocurrency, Supply chain, CSD, Central Securities Depository, STO, Security Token Offering, Decentralized supply chain, STO, Private blockchain, DAapps, Decentralized applications, Blockchain apps, Streaming Layer, Streaming Node, Storage Layer, Storage Node, Sharded Information, Sharded Data, Use Case, Use Cases, Blockchain Consensus, Consensus Protocol, Enterprise Solution, Enterprise Solutions, System Integration, Transparency, Immutability, Irreversibility, Traceability, Proof of Bandwidth, Proof of Conflation Aggregate, Proof of Storage, Encryption, Data Security, Data Privacy, Cyber Security, Hackers, Hacking, Nodes, Public Chain, Private Chain, Hybrid Chain, Public & Private Chain, Catapult, SDK, SDKs, Software Development Kits, Super Contract, Super Contracts, Smart Contract, Smart Contracts, Peer-to-Peer , Peer-to-Peer Storage, Software-as-a-Service, SaaS, Lon Wong, PSP, PeerStream, PeerStream Protocol, Anonymous streaming, New Economic Model, New Economic Model Foundation, 482.solutions, Ministry of Community Development UAE, Dragonfly  Fintech, Xarcade, Testnet, Test network, Mainnet, Main network, Tokenomics, Token Economics, XPX, Crypto Currency, Crypto Currencies, Crypto Exchange, Crypto Exchanges, Bitcoin, Zero trust, Escrow, Onchain escrow, Trustless swaps, Trustless, Onion routing, SIM Identity attestation, ProximaX KYC, KYC, Know Your Customer, Know Your Counter Party, Onboarding Customer, Customer Onboarding, Identity Management, Identity Management System, Identity Verification, Identity Authentication, Anti-Money Laundering, AML, RegTech, Regulation Tech, Regulation Technology, GDPR, General Data Protection Regulation, EU GDPR, European Union GDPR, European Union General Data Protection Regulation, Knowyourcustomer, Compliance system, Compliance systems, , ProximaX Suite, Office Suite, Office Collaboration, Workforce Collaboration, Collaboration, Real Time Collaboration, Office suite, word processing, Office collaboration, File sharing, Decentralized file sharing, Real Time Editing, Office Productivity, Productivity, Office Applications, Microsoft Office, Word Processor, Word Processing, Microsoft Word Spreadsheet, Spreadsheets, Excel, Microsoft Excel, Presentation, Presentations, Microsoft Powerpoint, Powerpoint, Keynote, Collabora Office, LibreOffice, Collabora Productivity, Collabora Productivity Ltd,'
taxonomy:
    category:
        - Announcements
image:
    summary:
        enabled: '1'
        file: shutterstock_129321458.jpg
    text:
        enabled: '1'
        file: shutterstock_129321458.jpg
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

Nos complace anunciar el lanzamiento de nuestras redes de prueba de almacenamiento y streaming.

Podrá acceder a través de los siguientes enlaces (solo en la lista de peer):
* Lista de nodos de almacenamiento: http://54.169.133.250:8080/network/peers 
* Lista de nodos de transmisión: http://13.250.33.245:6996/discovery/list

Su implementación es un salto hacia el logro de nuestros hitos para la red principal que está por llegar. Al igual que la red de prueba de blockchain, se utilizarán para organizar todas las actualizaciones de aquí en adelante.

Eventualmente, abriremos nuestras puertas a la comunidad para que el progreso que se ha logrado se pueda ver y probar hasta que estemos listos para desplegar la red principal.
 
## Capa de almacenamiento

Nuestra visión para la capa de almacenamiento ha sido la misma desde el principio: proporcionar una solución de almacenamiento descentralizado independiente de la tecnología. Una de las tecnologías críticas utilizadas para este propósito es el Sistema de archivos interplanetario ("IPFS"). Con  IPFS como servicio central, hemos construido los componentes de soporte necesarios a su alrededor.

Los componentes de soporte incluyen el módulo **verificador**, llamado por el actor verificador (es también un nodo de almacenamiento) para desafiar a los nodos, luego comprobar si aún se encuentran proporcionando el servicio de almacenamiento esperado. El módulo **aceptador** es un componente de capa externa con el que los clientes interactúan. Tiene una API REST para la interacción a través de un kit de desarrollo de software ("SDK"). El módulo de **contrato** se comunica con la blockchain para formar contratos digitales predefinidos que respaldan el incentivo y la persistencia de datos en el blockchain ledger.

Además, el sistema de **reputación** se ha incluido en esta versión. Siendo el sistema de clasificación para todos los nodos de almacenamiento que verifican su capacidad para realizar el servicio previsto y luego lo incorpora en el proceso de Market/Selection de Proof of Conflation Aggregate (PoCA).

Funciones implementadas para la red de prueba de almacenamiento:
* Módulo de almacenamiento de núcleo con IPFS.
* Verificador central, protocolo y APIs.
* Módulos.
    * Módulo aceptador.
    * Módulo de onboarding.
    * Módulo de contrato.
* Sistema de reputación (integración con blockchain).
* Implementado el Proof of Data Possession consensus, con tres algoritmos: APDP, CPOR y MHT-SC.
* Implementado el RPC sobre libp2p para la comunicación de protocolo.
* Interfaz de línea de comandos y System Daemon.
* SDK versión 1.



## Capa de Streaming 

Nos enorgullece anunciar que junto a nuestra Capa de Almacenamiento,  también se realizó el lanzamiento de la Red de Prueba de la Capa de Streaming, creada y entregada por PeerStream Inc. ("PSP").

El streaming descentralizado posee algunos de los casos de uso más convincentes y esperados por todos hasta ver que se haga realidad. PSP ha trabajado arduamente en la construcción de los componentes necesarios para soportar dicha capa.

Características desplegadas para la red de prueba de streaming:

* Sistema de presencia anónimo descentralizado para DAPP, que permite a los desarrolladores de aplicaciones crear redes de comunicación anónimas y seguras.
* Sistema de mensajería de datos y datos cifrados privados, anónimos 1: 1 y de extremo a extremo que utilizan enrutamiento de capas  y modernos protocolos de cifrado.
* El SDK de la aplicación cliente multiplataforma permite el desarrollo en Windows, OS X, Linux, iOS y Android.
* Autorización de nodo y habilitado para blockchain.

## Aplicaciones para migrar a Testnet
La mayoría de nuestras aplicaciones se encuentran ubicadas junto a la instancia privada de nuestra cadena de bloques y almacenamiento, sin  embargo, actualmente tenemos la red de prueba pública, nuestro equipo comenzará a planificar la migración de las mismas. 

## Avanzando

El lanzamiento de estas redes de prueba es un gran progreso hacia nuestro objetivo de construir una plataforma innovadora para tecnologías descentralizadas. Continuaremos comunicando las mejoras realizadas a medida que avanzamos hacia la realización de nuestra visión final.