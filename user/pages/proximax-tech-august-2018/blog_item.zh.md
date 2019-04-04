---
title: 'ProximaX 技术博客 –  2018年8月'
published: true
date: '09/08/2018 05:25 am'
publish_date: '09/08/2018 05:25 am'
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

## 8月，我们如之前设想的那样，开始了具有挑战性地构建ProximaX基石这一壮举。包括正式验证我们共识机制的设计，代币经济学以及实现存储和流媒体平台所需功能组件的体系结构，此设计是ProximaX平台的基础和框架。

本月的更新包括核心开发的进展，应用程序开发和云基础架构产品。我们还大幅增加了员工人数，并引进行业专家来提升和实现我们的目标。

# **核心开发进展**

## **ProximaX 存储平台 - 版本 1 (NIS1)**
我们上传了Docker容器编排程序——一个用来定义和运行多个Docker容器应用的工具。由于ProximaX存储平台包含了我们从IPFS分支出来的程序和一个用Java写的REST风格Web服务器。这使得任何人都可以启动他们的存储贡献者节点，参与到全球IPFS网络并通过兼容NIS1的SDK直接托管任何应用程序。

下面这张简易的图表显示了我们如何通过将一个去中心化的存储节点的哈希值作为消息内容的一部分来扩展NEM区块链交易的

![Diagram-1-Chinese](/content/images/2018/09/Diagram-1-Chinese.png)

                        图表1.0-数据根植于NEM交易，两种去中心化技术并行



## **NIS1存储贡献者节点**
我们开源了docker容器，这样任何人都可以运行他们自己的存储贡献者节点了

* **ProximaX Platform NIS1 Docker Compose 0.1.0-beta**


## **NIS1 SDKs**
我们已经开源了Java SDK和Typescript/Angular SDK，开发者可以用ProximaX存储平台构建和赋能他们的应用。
那些想要发布自己存储平台的人也可以使用NIS1的存储平台Docker编排程序
在最近几个月，几家公司已经测试了平台并给出了不错的反馈。但是他们大多希望使用投石车版本，我们的团队也将重点转向了这一点。

* **Java SDK 0.1.0-beta**

* **Typescript/Angular 0.1.0-beta**



## **ProximaX存储平台 版本2（投石车**）
团队在过去的几个月里一直在努力工作，并一直在开发和设计ProximaX存储平台的版本2
我们有四个核心部分：存储，流媒体，共识层和区块链层。在ProximaX整个生态系统平台中，我们将在所有节点角色中使用多重共识算法。我们决定参照NXT在区块链节点间使用股权证明(PoS)算法，同时使用一种叫做“混合聚合证明”的新方法-PoCa同时将股权，存储和流媒体层的存储和带宽作为权重。


## **存储层**
核心组件现已基本完成，我们正在构建API部件，这些组件将是在ProximaX系统中构建存储贡献者节点的主要处理组件。存储贡献者是存储生态系统的关键主机，复制者和验证者。混合聚合证明-PoCa适用于参与节点。与PoCa相比，存储和带宽所占的比重更大

![Diagram-2--Chinese](/content/images/2018/09/Diagram-2--Chinese.jpg)

                                *图表3.0-存储平台组件设计*

我们正最终确认支持该平台的代币经济模型。在ProximaX中，有如下一些角色：用户，Dapp服务提供商和存储/流媒体资源。用户是Dapp服务提供商或者存储资源的主要消费者，而Dapp服务提供商是向消费者提供服务的存储资源用户。
XPX代币可能会非常不稳定，因为它既是安全令牌又是实用代币，我们的研究和设计方法是使用与法币值挂钩的稳定代币。稳定的代币将由特殊的机制自然控制。
存储SDK进展顺利。到本月底，我们将发布Java，C＃和Javascript / Typescript的初始版本的存储SDK。这些将允许客户端构建可与投石车私有链和存储API通信的应用程序。

## **流媒体层**
正在开发核心和路由机制的功能设计。 PeerStream协议（PSP）是一种分布式去中心化的流媒体协议，旨在为ProximaX Dapps提供高质量的去中心化流媒体服务，从而实现隐私和安全功能。 PSP是一种隐私实时流路由协议，能够封装不同类型的命名空间和Dapp协议。 PSP旨在为ProximaX Dapps提供强隐私和安全功能，包括但不限于端到端加密，用户到用户的身份验证和元数据终止。

![Diagram-3-Chinese](/content/images/2018/09/Diagram-3-Chinese.png)

                                *图表3.0-流媒体平台高层次流向*

大多数API现已到位，我们正在评估如何制流媒体的共识机制。 它将通过PoCA运行，带宽是最明显的权重。

我们即将发布我们高级设计的技术规格


# **应用开发**

在应用程序开发方面，我们在平台上内部构建了多个应用程序。

### **ProxiForms**

![Proxiforms](/content/images/2018/09/Proxiforms.png)

ProxiForms是一个一站式商店，用于构建由ProximaX存储支持的静态表单。 我们正在完成ProxiForms的高级技术设计，并通过分析其在现实世界中的实际应用来完善它。 我们的目标是创建一个功能齐全的表单构建器，其中包含可通过适配器连接到不同后端系统的服务中间件。

### **ProxiBox**

![ProxiBox](/content/images/2018/09/ProxiBox.png)

ProxiBox是一个基于客户端的文件共享应用程序，它使用NIS1 SDK和IPFS作为守护程序。 这主要用于跨多个消费者和客户的存储和共享文件。 该应用程序已经开发了2个月了。 它目前正在测试中，并将持续到我们对其性能表示满意为止。 下一阶段将涉及将应用程序转换为使用SDK版本2，创建营销材料以及为此应用程序设置收入模型。

### **ProxiDocs**

![ProxiDocs](/content/images/2018/09/ProxiDocs.png)

ProxiDocs是一个完整的办公套件，使用与ProximaX NIS1集成的nextcloud / onlyoffice插件。 我们现在处于功能测试的最后阶段。 我们的内部团队现在正在使用连接到测试网络的生产环境就绪实例，并将很快转移到猕迅私有链网络。

### **ProxiKYC**

![ProxiKYC](/content/images/2018/09/ProxiKYC.png)

ProxiKYC自1月份开始开发，第一个生产就绪版本的目标发布日期是2018年9月10日。这将包括一套功能齐全的Onboarding Team工具，例如表单构建器，筛选工具和使用ProximaX的去中心化技术集成服务。

### **ProxiKeepass**

![ProxiKeepass](/content/images/2018/09/ProxiKeepass.png)

使用ProximaX存储集成的keepass插件的开发已经完成，我们现在将其与开放的keepass功能联系起来。插件的开发已经完成，我们现在正在组织测试策略

# **云基础设施服务和产品**

我们已经加强了我们的基础设施服务，并提出了多个infra / cloud私有化和许可产品。
其中一个产品是ProximaX Catapult Permissioned访问权限，公司可以要求我们使用我们修改版的NEM Catapult提供他们自己的区块链。他们可以要求我们使用他们自己的代币作为主链来构建私有化链，或者只是一个区块链实例来记录高度机密的信息。
我们还可以使用我们的IPFS分支 - 存储API将其与我们的去中心化文件管理系统联系起来 - 公司可以使用它来存储与许可区块链相关的大量数据。公司可以使用我们的SDK，这些技术将在9月初推出。 SDK将允许任何开发人员在区块链和去中心化文件管理系统上上传，下载，搜索和查找数据。
此外，我们还提供公司可以使用的去中心化数据库。去中心化数据库将具有区块链属性，但由Tendermint基本共识机制和Mongodb支持快速索引搜索。这将允许公司将其数据存储在具有区块链属性的技术上，并使用基于文档的索引搜索和查询。
我们还添加了Elasticsearch集成。我们已经提出了一个产品，公司可以将其配置的DFMS与Elasticsearch引擎捆绑在一起。

# **8月总结**

到8月底，团队通过建立存储，流媒体和支持共识机制以及代币经济学来努力巩固核心平台的设计。我们现在已经建立了这些参数，现在我们正在努力从中构建代码。
我们本月所做的总结。
* 开源的NIS1构件
* 开始设计共识机制和代币经济学。
* 开始构建ProximaX存储和流媒体平台的组件
* 使用NIS1 SDK开始构建和测试去中心化应用程序
* 开始构建基础架构和云产品。
