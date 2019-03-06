---
title: 'ProximaX 技术博客——2018年9月'
published: true
date: '10/17/2018 05:29 am'
publish_date: '10/17/2018 05:29 am'
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

# 9月份我们所有人都专注于完成大部分应用程序以及我们的核心平台研究。我们的大多数应用程序都处于UAT或预生产阶段。我们的核心平台研究一直在进行，与各自模块的开发并行。

在这篇帖子更新中，我将简要介绍一下9月份我们一直在做的事情以及平台和应用程序的一些关键更新。

#**核心平台——开发状态**
我们的研究主要侧重于巩固方法，包括各角色的设置，模块，数据流，token和共识。 这些内容的范围太大，无法容纳到一篇博文中，所以我希望将在10月份的一个单独的更新中分享整个帖子，分享高层设计，共识原理图和白皮书。


##**ProximaX 平台 – 天狼星**

我们推出的这个平台的代号天狼星。 我们管他叫天狼星是因为，他是我们银河系中十大最亮的恒星之一，这清楚地代表了我们想要达到的目标; ProximaX最初的定义推出的时候，就注定将是最耀眼的一颗星。

ProximaX的生态系统围绕着我们定义的网络角色。 这些参与者是共同工作以实现其提供的平台服务的节点。

![Snip20181014_1-1](/content/images/2018/10/Snip20181014_1-1.png)

注：
红色：区块链节点
绿色：存储节点
蓝色：流节点

以下是网络生态系统参与者中每个参与者的描述。


##**区块链节点**

使用投石车，我们拥有了强大的区块链。投石车目前是一个私有版本，其共识机制尚未针对公共部署进行优化。因此，我们正在实施一个参考NXT实施的共识机制。区块链节点将主要用作整个生态系统中所有交易的记录分类帐。 它包括节点信息，统计信息，配置和功能数据，激励，交易和合同。 我们的生态系统数据流完全依赖于区块链节点。NEM的投石车技术非常适合。

借助NEM的投石车，我们将能够利用其预定义/内置的智能业务规则和逻辑以及插件机制。我们将用它来存储（共识权益）证明数据和声望信息，以及我们自己的混合聚合选举证明和市场信息。9月，我们构建了关于如何利用每个投石车功能来支持我们的存储和流节点生态系统的设计。
天狼星首次推出将只支持投石车节点，因为这将是我们的主要账本技术，它为所有后续节点和服务提供支持。因此，一个测试网络将很快推出。我们需要一些公众参与，我们希望社区能够留意到这个公告并为测试网络做出贡献。

##**存储节点-主机，验证者，复制者**
存储贡献者将与区块链节点不同。 这些节点将主要成为我们去中心化存储愿景的焦点。 这些节点将具有一个入门机制，使他们能够参与网络并根据他们的偏好设置他们的收入模型。 一旦进入市场，它们将根据存储可用性被包含在市场内，然后将暴露给不同的消费者。.

![Picture1-1](/content/images/2018/10/Picture1-1.png)

存储节点将被验证，测试和挑战。 每个存储节点都将根据我们从中获得的共识证明集合得到自己的声望。 我们使用多种机制，包括数据拥有证明，空间/时间，复制和带宽，以确保网络上信誉良好的节点的一致性。

![Picture2](/content/images/2018/10/Picture2.png)

验证者和复制者也属于存储节点。一旦存储节点加入网络中，它将定期受到一组验证者的挑战。然后，这些验证者的输出将被输入到我们正在建立的声望系统，这将构成选举过程的基础。另一方面，复制者是一组随机选择的节点，他们是用来当做文件复制器的。与存储节点一样，这些节点也将受到挑战和验证，但与存储文件的实际主机频率不同。

##**流节点**
所有流节点被组织成松散连接的网状网络，其中一些节点与相邻节点连接。节点被设计为用于在需要时维护节点间连接，并断开未使用的连接，并在需要时重新建立。一些流节点将通过一个或多个公共网络接口公开访问ProximaX DApps，其中一些流节点仅用作内部节点，并将用于系统中的临时跳跃。

![Snip20181014_7](/content/images/2018/10/Snip20181014_7.png)


该团队主要致力于最终确定协议的洋葱路由部分，这主要是在客户端呈现公告，流式生态系统中的实体将用于查找和保护私有消息。节点和Client / SDK的开发正在进行中，并且已经开始构建音频/视频流这块。与存储类似，我们也开始构建区块链的集成，直到10月份我们都要跟进这个。

##**执行节点-超级合约**
第四个角色是执行器节点同时也可以是存储节点。在9月底，该团队开始了一些关于如何扩展和实施智能合约解决方案的初步讨论和研究，该解决方案与当前的智能合约解决方案完全不同，这些解决方案在某种程度上无法以常规方式实施。我们将这个增强和修订的智能合约版本称为“超级合同”，以便与现有的智能合约项目区别开来。这可能不会进入ProximaX的第一个版本，可能会成为下一次迭代的一部分。

一旦实施，它将为应用程序开发人员提供一个巨大的机会，将平台用于他们的分散式解决方案应用程序解决方案。我们将引入容器管理技术以及可能构建我们自己的脚本语言，以允许开发人员使用由执行节点执行的分布式文件管理系统（“DFMS”）来构建分布式可执行代码。

现在还处于非常早期的阶段，但我们有令人信服的研究论文，我们的专家也有建立这种技术栈的经验。一旦我们与我们的核心产品达成协议，我们将尽力在未来几个月内提供更多相关信息。

##**混合聚合证明和市场**
我们推出的一个新概念是PoCA市场选择。它基本上是一个竞拍系统，网络将使用它来确定可以容纳给定请求的最佳节点。它包含所有统计数据，包括基于X证明，市场定价，位置等的声望得分，所有这些都用于确定给定作业可用的最佳节点。

我们已经完成了PoCA所需的设计和参数，并开始构建该模块所需的一些组件。 我们的目标是在本月底之前提供更加技术性，深入的文档。

##**存储的代币经济学适配和仿真**
我们很幸运有研究人员可以全面分析我们的需求，并结合我们在使用代币作为ProximaX生态系统一部分时的愿景。正如上个月的更新所述，我们希望使用一个稳定的代币来代表ProximaX的“力量”。

对于每个客户端请求，都需要代币。当用户请求服务时，客户端应用程序应接受代币以进行服务，并将竞价的获胜者分配为锁定代币。如果服务正确实施，则应根据协议解锁并在验证器和存储节点之间分配代币。

如果在服务过程中出现问题，从而使服务与第一提供者无效，则验证者应将锁定的令牌授予另一个存储节点。它提供新的竞拍并将锁定的令牌（或其一部分）分配给另一个存储节点。这种重新分配方法提供了付费服务的连续性。应使用一组标准来确定存储节点是否可以履行其义务。这个模型需要很好地定义和完善，以便我们不会因为非性能的问题而错误地惩罚节点。

在上游，赢得服务配置的竞拍还必须针对任何恶意行为进行设计。为此，验证者将进行测试以确保达成共识，即存储节点不会作弊或看起来能够提供服务。

在给出业务用例的情况下，我们对角色的这种分布进行了初步模拟，我们希望在接下来的几个月中提供更多相关信息。

#**应用开发**
我们一直在开发的大多数应用程序都已在功能上完成，但几乎所有这些应用程序都已从NIS1版本转换为投石车版本。下面是我们的一些关键更新。

##**Proxi文档变更为Proxi套件**
ProxiSuite是一个基于NextCloud，OnlyOffice并与ProximaX技术集成的办公应用程序。 办公套件完全能够支持基于Microsoft / Open Office文档文件的实时文档管理。Proximax技术支持的OnlyOffice扩展允许用户使用去中心化存储和区块链加密机制创建和管理他们的文档。一旦明确了应用程序的功能，我们可能会决定在以后通过竞赛重命名ProxiSuite。

![Snip20181014_6](/content/images/2018/10/Snip20181014_6.png)

我们很快就会发布它的公共版本。

##**Proxi网盘 UI提升和测试**
我们一直在努力改进UI并将库迁移到投石车。我们现在正在努力建立收入模式。 最终，将加入到ProxiSuite中


ProxiBox暗色主题

![Picture1](/content/images/2018/10/Picture1.png)


ProxiBox亮色主题

![Snip20181014_5](/content/images/2018/10/Snip20181014_5.png)

##**从Pad到Proxi笔记**
ProxiNote是我们正在构建的另一个实用工具。这将允许用户完全加密和保护他们的笔记。

![Snip20181014_4](/content/images/2018/10/Snip20181014_4.png)

长期规划是为此构建Web UI，并且可能再次被加入到ProxySuite中。这是一个更简单的Evernote版本，但具有强大的区块链级加密功能。

##**Proxi表格 –框架和中间件**

ProxiForm是一个应用程序开发和业务工具框架，允许其用户构建由区块链支持的基于表单的应用程序。这是一个庞大的项目，用于构建基于表单的框架，该框架由投石车和BigChainDB等去中心化技术支持。最终结果是，一旦实施，它将为我们提供一个工具，利用投石车多聚合签名，为复杂的工作流程构建一些简单的表格，如调查表格。

![Picture3](/content/images/2018/10/Picture3.png)

目前，我们正在评估此框架的技术堆栈。 Proxiform最引人注目的特性是中间件堆栈

#**正在贡献中的项目**
ProximaX作为一家公司，也为投石车 / NEM项目做出了贡献。 以下是我们正在建设的一些项目，作为对NEM的贡献。

##**投石车桌面钱包**
我们正在构建一个ProximaX 投石车桌面钱包，可用于管理我们的代币，特别是XPX代币。 现在正在进行中，我们有几个截图来显示其进展。

![Screen-Shot-2018-10-14-at-11.45.08-PM](/content/images/2018/10/Screen-Shot-2018-10-14-at-11.45.08-PM.png)

一旦完成，我们将贡献给公众，以便每个人都可以使用我们强大的桌面钱包并扩展其功能以供自己使用。

桌面钱包不仅仅是典型的钱包。我们正在构建一个框架和SDK服务，以便任何人都可以扩展并将其用于自己的应用程序集。任何人都可以在typescript / javascript上使用我们的插件框架开发并自定义钱包。

##**投石车的SDK**

我们正在构建3个投石车SDK，作为我们对NEM Foundation技术的贡献，用Golang，Python和Swift 4编写。

这实际上意味着一旦发布，平台开发人员将能够使用SDK在投石车区块链之上构建其强大的应用程序。

我们很快就会向公众开放这些SDK。

https://github.com/proximax-storage/nem2-sdk-swift
https://github.com/proximax-storage/nem2-sdk-python
https://github.com/proximax-storage/nem2-sdk-go

#**9月总结**
9月，我们非常高兴核心开发的大部分进展顺利。 我们已经开始构建一些与整个ProximaX平台相关的设计组件，因为我们几乎已经确定了开发架构。

以下是我们9月份所做的总结：

存储JAVA SDK，Typescript / Javascript已完成90％。 我们现在的大多数应用程序都在从使用NIS1 SDK迁移到新的存储SDK。
* 共识算法的PoC。
* 节点准入流程
* 构建存储节点的声望系统
* 继续构建存储层组件
* 继续构建流层组件