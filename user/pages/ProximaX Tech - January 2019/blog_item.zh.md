---
title: 'ProximaX 技术博客 - 2019年1月'
media_order: tech-january2019.png
published: true
date: '16-02-2019 06:04'
publish_date: '16-02-2019 06:04'
metadata:
    Keywords: 'ProximaX, ProximaX Sirius, blockchain technology, Blockchain powered, Blockchain protocol, Distributed ledger technology, DLT, dlt, Distributed ledger, Decentralized database, Decentralized database technology, Decentralized storage, Decentralized storage technology, Decentralized supply chain, Decentralized streaming, Integrated and distributed ledger technology, IaDLt, Peer-to-peer technology, Peer to peer streaming, Peer to peer, Consensus mechanism, Consensus protocol, Asymmetric encryption, Data encryption, Off-chain storage, Off-chain streaming, Distributed File Management System, DFMS, Super Contract, Immutability, Data encryption, Encrypted by default, Permissioned, Permission based, Tokenomics, Token economics, Crypto trading, Cryptocurrency, Supply chain, CSD, Central Securities Depository, STO, Security Token Offering, Decentralized supply chain, STO, Private blockchain, DAapps, Decentralized applications, Blockchain apps, Streaming Layer, Streaming Node, Storage Layer, Storage Node, Sharded Information, Sharded Data, Use Case, Use Cases, Blockchain Consensus, Consensus Protocol, Enterprise Solution, Enterprise Solutions, System Integration, Transparency, Immutability, Irreversibility, Traceability, Proof of Bandwidth, Proof of Conflation Aggregate, Proof of Storage, Encryption, Data Security, Data Privacy, Cyber Security, Hackers, Hacking, Nodes, Public Chain, Private Chain, Hybrid Chain, Public & Private Chain, Catapult, SDK, SDKs, Software Development Kits, Super Contract, Super Contracts, Smart Contract, Smart Contracts, Peer-to-Peer , Peer-to-Peer Storage, Software-as-a-Service, SaaS, Lon Wong, PSP, PeerStream, PeerStream Protocol, Anonymous streaming, New Economic Model, New Economic Model Foundation, 482.solutions, Ministry of Community Development UAE, Dragonfly  Fintech, Xarcade, Testnet, Test network, Mainnet, Main network, Tokenomics, Token Economics, XPX, Crypto Currency, Crypto Currencies, Crypto Exchange, Crypto Exchanges, Bitcoin, Zero trust, Escrow, Onchain escrow, Trustless swaps, Trustless, Onion routing, SIM Identity attestation, ProximaX KYC, KYC, Know Your Customer, Know Your Counter Party, Onboarding Customer, Customer Onboarding, Identity Management, Identity Management System, Identity Verification, Identity Authentication, Anti-Money Laundering, AML, RegTech, Regulation Tech, Regulation Technology, GDPR, General Data Protection Regulation, EU GDPR, European Union GDPR, European Union General Data Protection Regulation, Knowyourcustomer, Compliance system, Compliance systems, , ProximaX Suite, Office Suite, Office Collaboration, Workforce Collaboration, Collaboration, Real Time Collaboration, Office suite, word processing, Office collaboration, File sharing, Decentralized file sharing, Real Time Editing, Office Productivity, Productivity, Office Applications, Microsoft Office, Word Processor, Word Processing, Microsoft Word Spreadsheet, Spreadsheets, Excel, Microsoft Excel, Presentation, Presentations, Microsoft Powerpoint, Powerpoint, Keynote, Collabora Office, LibreOffice, Collabora Productivity, Collabora Productivity Ltd,'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talks'
slug: proxima-tech-january-2019
image:
    summary:
        enabled: '1'
        file: tech-january2019.png
    text:
        enabled: '1'
        file: tech-january2019.png
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

我们最近宣布推出公共存储和流媒体测试网络，在撰写本博客时，我们的一些应用程序正在迁移并与公共网络集成。

有关公共存储和流测试网络的更多信息，请访问下面我们最近的博客文章。

https://blog.proximax.io/storage-streaming-testnet-launch/
https://blog.proximax.io/proximax-sirius-blockchain-test-network/

我们将继续使用这些环境来实施变更。与公共区块链测试网络一样，我们将每周添加我们的变更（一般每周五）。一旦准备完毕，我们将鼓励社区通过邀请开发人员在平台上构建应用程序来进一步参与。

## 高级技术论文
我们现在还发布了第一版技术白皮书以及特定于存储的研究论文。

高级技术白皮书是对所有平台组件的鸟瞰。在第一版白皮书中，我们已经解释了平台的整体设计和内部流程的工作原理。

我们有两种类型的平台，私有/许可和公共。公共平台将包括存储，流媒体和超级合约。私有/许可具有更多受控制的功能集，包括存储，流，数据库和超级合同。这些细节都写在白皮书中。

除了有关高级技术设计的信息外，我们还发布了存储层的支持参考和建模可跟踪性报告。有关更多信息，请阅读下面的博客文章。

https://blog.proximax.io/tech-papers/

随着平台开发的进展，我们的团队将继续发布更多文档。

## ProximaX网络钱包更新
自几个月前推出以来，我们对网络钱包进行了重大改进，并修复了报告的问题(https://trello.com/b/nVu5ZxqN/proximaxtestnetapps)。

### 交易仪表盘
* 纠正了已确认和未确认交易的重复。
* 金额中添加了马赛克可分性。
* 性能得到改善。
* 用户登录的时候是初次加载。
* 登录后，将缓存交易和马赛克信息。
* 确认新交易后，会将其添加并保存在缓存中。
* 当用户退出钱包时，存储在缓存中的所有信息都将被销毁。

### 节点选举
* 模型中增加了关闭按钮
* 在用户字段中修改最少6个字符为2个字符

### 地址簿
* 模型中增加了关闭按钮
* 在用户字段中修改最少6个字符为2个字符

### 帐号
* 验证密码非空
* 显示私钥时隐藏密码字段，关闭私钥时密码字段再次显示

## 总结
以下是一月份我们完成的事情：

* 推出用于存储和流媒体的公共测试网络。
* 完成并发布了高级技术白皮书和研发文档。
* 推出ProximaX Suite应用程序。
* ProximaX网络钱包修补。