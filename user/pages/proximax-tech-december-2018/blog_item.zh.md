---
title: 'ProximaX 科技– 2018 十二月'
published: true
date: '01/18/2019 05:51 am'
publish_date: '01/18/2019 05:51 am'
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

到目前为止，我们的讯息更新主要集中在准备启动存储和流媒体的测试网络，以及完善我们的技术论文。我们的团队一直非常注重于组件和模块的核心开发，以支持我们的平台引擎。 我们也继续与NEM核心开发人员合作，以鉴定双方代码库可协作和集成的领域。

## 即将启动的存储/ 流媒体测试网络 

### 存储测试网络
经过几个月重点开发存储层的核心组件，我们现在已准备好启动存储测试网。存储层的参与者与区块链网络不同，并在完全不同的节点生态系统里。这是一个开创性的解决方案组件。它使用分叉版本的libp2p和IPFS来增强通信，将分布式哈希表替换为网状网络，并添加专门用于ProximaX Sirius天狼星存储平台的加密库。 

存储层将引入一组新的接口(API），让外部客户端与核心功能驳接。我们将对此另作公告并提供相关文档。

### 流媒体测试网络
我们的团队不知疲倦地工作至2018年底，为流媒体测试网的推出做准备。流媒体测试网本预计将在2019年第一季度推出，但我们可以在本月与存储层一起启动初版的流媒体层组件。 

测试网络的第一个版仅包含匿名/安全文本和数据流。这将成为其他功能的基础，因为它将充当其他使用流媒体层的所有应用程序/客户端的分布式在线服务。


### 与区块链测试网络类似 
如同区块链测试网络，我们会为每一个服务层启动单独的测试网络。我们这样分阶段的更改方式也是为了社区参与过程做好准备。这些都会另作公布。

## 区块链层功能增强

### 市场机制

在开放市场的模式中，各种代理互相竞争。市场的核心目标如下：

+ 选择在公开市场中执行任务的合约代理 - 无论是存储还是验证
+ 接受代币的操作结果
+ 相应地更改声望指数


### 信誉系统

信誉是每个帐户的度量标准。它根据交易历史记录来计算，计算公式如下：

![Screen-Shot-2019-01-05-at-8.17.00-PM](/content/images/2019/01/Screen-Shot-2019-01-05-at-8.17.00-PM.png)
 
**where**

+ *Nmin* - 一些预先配置的最小合约数量
+ *Rini* - 信誉初值，直到节点没有Nmin合约为止
+ *Nsuccess* - 节点成功完成的合约数量
+ *Nall* - 节点成功完成的合约数量

信誉由节点选择机制负责。信誉指数较低的代理被选中的可能性相对地较低。指定信誉（vested reputation）为我们提供一种机制，可以根据表现来惩罚和激励用户。每个用户将被分配一个身份，影响着他们被纳入或排除在群体共识之外的概率。这将鼓励每个用户争取最好表现。

### 合约命名空间/对象

由于我们正在引入一些新的合约，我们扩展了ProximaX Sirius天狼星（NEM Catapult投石车）并创建了一个抽象合约对象作为我们新合约的基础。我们希望将类似的抽象概念用于最终实施的超级合约。


![Screen-Shot-2019-01-05-at-8.33.50-PM](/content/images/2019/01/Screen-Shot-2019-01-05-at-8.33.50-PM.png)

### 新合约 -  ModifyContractTransaction
有了新的信誉系统，我们需要为存储层构建特定的交易/合约类型。为此，我们开发了一个名为ModifyContractTransaction的新合约，其中包含以下详细的信息：持续时间，多重签名户口，文件哈希，客户，执行者（例如存储节点）和核查员。

![Screen-Shot-2019-01-05-at-8.33.07-PM](/content/images/2019/01/Screen-Shot-2019-01-05-at-8.33.07-PM.png)

## 论文
我们现在有一些正在定稿的论文即将发布：

+ 更新的白皮书
+ 高阶的技术设计
+ 代币经济学建模
+ 存储流媒体
+ 存储流媒体的可追溯性
+ X证明的架构
+ 区块链绩效的度量标准

## 应用程序的开发
几个月前，我们开始开发一系列应用程序，其中大部分已经完成。我们将会把这些应用程序捆绑，作为我们产品的一部分。

+ ProximaX Suite(昔称ProxiSuite)是一款由ProximaX Sirius天狼星区块链和存储层支撑的办公套件应用程序。它是软件配套的可选项。  

+ ProximaX File It，ProximaX Notes和ProximaX Vault（昔称ProxiBox，ProxiNotes和ProxiKeepass）已准备就绪。我们将把这些工具作为实用程序汇集和Catapult投石车基础设施捆绑销售。
ProximaX File It！是一个分布式的文件管理系统，可用于安全地共享文件。 ProximaX Notes是一个主要用于安全存储加密文本格式文件（encrypted text-based format files）的桌面应用程序。 ProximaX Vault是一个使用Keepass 数据库，通过ProximaX Sirius天狼星区块链和存储层安全存储的密码管理器。

+ 浏览器（Explorer）和钱包（Wallet）也是可选项的一部分，以便客户可以在我们配置它们后立即使用ProximaX Sirius天狼星的区块链。

## 摘要
以下是我们12月份所做的总结：

+ 核心合约和NEM Bison于ProximaX Sirius天狼星区块链层的合并。
+ 开发存储层核心代码和免费组件，如加密库，软件开发工具包(SDKs)和实用程序。
+ 开发流媒体层核心代码和软件开发工具包(SDKs)。
+ 准备启动存储层和流媒体层的测试网。
+ 定期更新文稿，如技术白皮书，代币经济学，X证明的架构，存储流媒体和性能度量标准。
