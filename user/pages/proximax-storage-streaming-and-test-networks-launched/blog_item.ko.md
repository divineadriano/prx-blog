---
title: 'ProximaX 저장소, 스트리밍 테스트넷 런치!'
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

ProximaX의 저장소 및 스트리밍 테스트넷이 런칭 된것을 매우 기쁘게 생각합니다.

테스트넷 노드들은 아래의 링크를 통해 접근이 가능합니다. (피어 목록):
* 저장소 노드 목록 : http://54.169.133.250:8080/network/peers 
* 스트리밍 노드 목록 : http://13.250.33.245:6996/discovery/list

이 개발의 진척은 앞으로 이어질 메인넷에 대한 우리의 이정표를 한층 가깝게 만들어 줄것입니다. 블록 체인 테스트넷과 마찬가지로, 이 테스트넷은 앞으로 모든 업데이트를 수행하고 테스트하는데 사용됩니다.

우리는 추후 공개적으로 노드를 운영하거나 네트워크에 참여할 수 있도록 오픈 할 것이므로 진행 상황은 메인넷을 시작할 준비가 될 때까지 볼 수 있고, 시도하고, 테스트 할 수 있습니다.

 
## 저장소 계층

저장소 계층에 대한 우리의 비전은 처음부터 명확했습니다. 기술에 독립적인 분산형 저장소 솔루션을 제공하는 것입니다. 이 목적을 위해 우리가 사용하는 중요한 기술 중 하나는 Interplanetary File System ("IPFS")입니다. IPFS를 핵심 서비스로 사용하여 필요한 지원 구성 요소를 구축했습니다.

구성 요소에는 노드가 예상되는 저장소 서비스를 계속 제공하는지 확인하여 노드를 요청하는 검증자 (저장소 노드이기도 함)에 의해 호출되는 검증자 모듈이 포함됩니다. 억셉터 모듈은 클라이언트와 통신하게 되는 외부 계층 구성 요소입니다. SDK (Software Development Kit)를 통한 상호 작용을 위한 REST API가 있습니다. 컨트랙트 모듈은 블록 체인과 통신하여 미리 정의 된 디지털 컨트랙트를 작성하여 블록 체인 장부에 대한 인센티브 및 데이터를 완전히 보존되도록 하게 합니다.

이 외에도 이번 런칭에는 평판 시스템이 포함되어 있습니다. 이것은 노드들이 수행해야할 서비스를 수행 할 수 있는지 확인한 후 모든 저장소 노드에 대한 채점 시스템을 작성한 후 이를 집계하여 Proof of Conflation Aggregate (융합 누적 증명, PoCA)를 통해 시장 / 선택 프로세스로 이어집니다.

저장소 테스트넷에 적용된 기능들:

* IPFS를 통한 코어 저장소 모듈
* 코어 검증자, 프로토콜, API
* 모듈
    * 억셉터 모듈
    * 온보딩 모듈
    * 컨트랙트 모듈
* 평판 시스템 (블록 체인과 연계)
* Proof of Data Possession 합의 알고리즘 (APDP, CPOR, MHT-SC를 포함)
* 프로토콜 통신을 위한 libp2p상의 RPC 
* 커맨드라인 인터페이스(CLI), 시스템 데몬
* SDK 버전 1


## 스트리밍 계층

우리는 저장소 계층과 함께 PeerStream Inc. ( "PSP")에서 제작하여 제공하는 스트리밍 계층 테스트 네트워크의 출시를 발표하게 되어 자랑스럽게 생각합니다.

분산 된 스트리밍은 우리가 모두 실현되기를 기대하고있는 가장 강력한 유스 케이스 중 하나입니다. PSP는이 계층을 지원하는 데 필요한 구성 요소를 구축하기 위해 많은 노력을 해왔습니다.

스트리밍 테스트넷에 적용된 기능들:

* DAPP 용 익명의 분산형 프리젠테이션 시스템으로 개발자는 강력한 보안을 가진 익명 통신 네트워크를 구축 할 수 있습니다.
* Onion 라우팅 및 최신 암호화 프로토콜을 사용하는 개인, 익명 1 : 1 을 지원하는 처음부터 끝까지 암호화된 텍스트 및 데이터 메시징 시스템
* Windows, OS X, Linux, iOS 및 Android 개발을 가능하게하는 교차 플랫폼 클라이언트 응용 프로그램 SDK
* 블록 체인이 활성화 된 클라이언트 및 노드 인증

## 테스트넷으로 적용될 응용프로그램
우리의 대부분의 응용프로그램들은 현재 우리의 프라이빗 네트워크에 머물고 있습니다. 그러나 우리가 저장소 및 스트리밍 테스트넷을 런칭하는 만큼, 이 테스트넷으로 지금까지 개발해온 응용프로그램들은 이동해 나갈것입니다.

## 앞으로의 계획
이러한 테스트넷을 시작하는 것은 분산화 기술을 위한 혁신적인 플랫폼을 구축하려는 우리의 목표를 향한 커다란 도약입니다. 우리는 우리의 최종적인 비전의 실현을 향해 나아감에 따라 개선된 사항을 계속해서 공유드리겠습니다.
