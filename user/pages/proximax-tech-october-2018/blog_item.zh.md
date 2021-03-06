---
title: 'ProximaX 技术博客 - 2018年10月'
published: true
date: '11-11-2018 05:32'
publish_date: '11-11-2018 05:32'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talk'
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

**就我们的技术而言，10月份变得更加有趣。我们正在构建的许多应用程序现在都处于测试的最后阶段。**



# **技术/开发 见面会**

我们在10月初举行了第一次开发者聚会，Lon和我讨论了ProximaX平台的优势以及它如何对业务流程产生巨大影响。Lon概述了ProximaX平台产品的几个关键组件，我做了ProximaX组件的高度概括，其开发情况以及即将发布的更新。

![lon-oct-blog](/content/images/2018/11/lon-oct-blog.jpg)

演讲PDF:

* [ProximaX概览](https://ipfs2.dev.proximax.io/ipfs/QmapKy64pU9CkyyGWxKSTL9yhPfS5CUxdYrpWgoEXAvVxF/20181012%20NBC.pdf)
* [ProximaX 技术栈概览](https://ipfs2.dev.proximax.io/ipfs/QmcGx7tWF3fGNrwkQQVR3Y6AoMGER9MxSo5y2qUbMnQVWr/Technical%20PPT.pdf)


# **核心开发进展**

## ProximaX天狼星区块链

我很自豪地宣布，我们正在配置我们的TESTNET区块链网络。整个团队一直在推动核心变更，并处于修补投石车核心的最后阶段。 我们的计划包括提供五个区块链TESTNET节点，这些节点将与其他工具一起向公众开放。 区块链TESTNET节点将是我们测试投石车变更的舞台。在我们最终确定这些更改时，我们将逐步增加节点数。我们将专门为我们的Testnet发布另一个公告。我们向前推进的每个版本都将被记录并公开透明地宣布。

使用NEM的投石车，我们可以将彼此的变更分离，并且通过插件机制，我们可以扩展特定于ProximaX的新交易类型，这对整个系统至关重要。

## PDP/PoREP的接收器

我们已经努力构建接收器，数据所有权证明（PDP）和复制证明（PoREP）实现，现在正在测试中。 接收器是捕获上传请求的主要组件，上传请求又被送入节点。 然后，所选节点将经历验证过程和不断进行的挑战机制，以进行数据所有权证明。

![blog1](/content/images/2018/11/blog1.jpg)

数据所有权证明允许客户端在不受信任的服务器上存储数据，它用来验证服务端拥有原始数据而不检索它或自己存储副本。它通过使用生成概率证明协议与远程服务器交互来实现。

![blog2](/content/images/2018/11/blog2.png)

当服务器回答质询/证据时，这是一个强制性过程，如果不这样做表示数据丢失，这将影响主机的声望，并且分配客户端请求的机会降低。尽管如此，服务器仍然可以通过说服验证者它仍然拥有该文件来欺骗系统。服务器不当行为的动机可能是多种多样的，包括通过丢弃尚未访问或很少访问的数据（出于经济利益）或隐藏数据丢失事件（由于管理错误，硬件故障，外部或内部攻击造成的损害）来回收存储等。

为了实现数据拥有的概率证明的PDP方案的目标是在服务器删除文件的一小部分时检测服务器错误行为。关于我们如何处理这种不良行为，我们正在采取几种方法，我们将在我们即将发布的技术文件中深入讨论。

 “复制证明”大致相同，但挑战将包括证明捍卫公开可验证的声明，即它将专用资源用于存储数据文件的一个或多个可检索副本。从鸟瞰视图查看，当客户端想要复制文件时，通过启动复制请求（默认情况下启用），它会选择一个主机和一组验证者（附近的网络百分比），验证者是那些挑战复制者（证明者）的节点，如果他们使用需要在给定时间范围内解决的挑战集来保存文件。这里有几个属性实际上类似于PDP，但区别在于PoRep是可检索性证明和空间证明的组合。需要满足这两个证明才能证明节点确实存在该文件。
 
这两个概念只是我们在ProximaX存储层上构建的共识算法之一，作为管理主机和复制器之间的证明的一种方式，由系统验证器（也是其他节点）验证。我们的共识技术白皮书将提供更广泛的内容。

## 关键概念：存储生命周期

我们已经最终完成了存储上线的初始实现，我们已经定义了以下内容来了解存储节点的生命周期。在另一篇博客文章和我们的技术白皮书中将对此进行深入讨论，但以下是该过程的摘要。

# 开始：存储节点上线
当用户想通过贡献磁盘空间来参与时，用户首先需要加入网络。在成功参与之前需要进行几个步骤。
存储参与者需要运行CLI，然后评估存储和磁盘空间。将收集信息并将其发送到网络进行验证。最近的验证者挑战节点以证明它具有空间。该协议基于hard-to-pebble graphs（一种存储空间证明算法）的谜题。经过验证，该节点可以使用存储的马赛克资产，该资产将在POCA-Market选择中注册。
* 节点在磁盘上分配一些空间用作存储，并提交给网络请求进行验证。
* 验证者运行交互式协议，该协议要求节点证明能够使用这么大的空间。协议基于基于hard-to-pebble graphs（一种存储空间证明算法）的谜题。
* 如果存储通过此协议，则节点可以使用POCA-Market中的存储马赛克资产进行存储。

## 运行：处理客户端请求

在存储节点加入后，它现在可以处理客户端请求。然后，该节点发布其每GB的价格或同意由ProximaX设置的系统范围定价。设置收入模型后，它将作为参与者列表的一部分包含在市场选择过程中。当节点成为参与者时，它将可以根据诸如股权，可用存储，带宽，竞争性定价和报告的验证者统计数据等众多因素而改变的声望。
* 节点发布每Gb的价格或同意ProximaX设定的系统范围定价。
* 此后，它可以参与市场并根据存储合同选择作为存储提供商或其他节点的验证者，这将在下一章中描述。
* 在此类工作期间，存储节点可以获得和丢失声望，该声望用作确定供应商优先级的参数。

## 结束：节点生命周期结束

当节点脱机时，它可以将其职责传递给其他节点。然后，节点可以将当前合约传递给另一个节点，该节点可以继续改下线节点的工作。
* 节点可以停止宣布自己为存储提供商，并将当前合约中的职责传递给另一个节点。

## 声望：PoCA市场/选举

ProximaX的整个节点生态系统在不同的网络上运行，但其中的所有参与者都有声望。经过数月的设计和讨论，我们现在已准备好构建这个系统。选举机制使用声望：信誉较低的代理被选中的可能性较低。授予的声誉为我们提供了一种机制，使用户能够最佳地获得身份，同时小心被排除在群体共识之外。
当特定客户端请求服务（存储）时，节点起始点通过检测下一个容纳请求的最佳节点来在市场上运行去中心化拍卖。
每个节点都为每种类型的服务维护一个市场表：
* 帐户地址和关联节点
* 提供服务的节点终端
* 提供的服务量（GB用于文件存储，空间检查验证，内容拍卖和审计等）
* 价格标记
* 地点
* 声望（以前的统计数据）
* 节点股权 - 我们将尽快提供更多关于股权的细节。

这些都是在特定买方（服务消费者）和卖方（服务提供商）之间的握手和协调的复杂算法中运行的。

## 区块链SDK

我们向公众报告说，我们通过为特定平台构建SDK来为投石车做出贡献。 我们已经发布了这个，我们打算继续这样做。 10月份我们发布了“Go”和“Swift”SDK。 我们还在构建Python，可能会构建Ruby和Rust SDK。

* https://github.com/proximax-storage/nem2-sdk-go
* https://github.com/proximax-storage/nem2-sdk-swift

Python SDK仍在开发中，我们正在与NEM Foundation合作构建它。

## 技术白皮书和路线图更新

我们现在有一些技术论文待处理，正在审查和校对。这些论文将包含每个组件的技术细节。我们会在完成后立即向公众发布。

鉴于我们已经做出的改变，我们决定更新我们的路线图。当然，我们应该向公众展示我们成功的高水平道路。该路线图将与该网站的新更新一起显示。我们现在正在进行网站改版。

## 应用开发进展

ProxiBox, Notes和Keepass
ProxiBox，Notes和Vault现在处于开发/测试的最后阶段。ProxiBox将重命名为ProximaX File It！ 和Keepass将被称为ProximaX Vault。我们目前正在构建收入和许可模式，而这种模式将用于商品化产品。内部团队现在正在进行所有必要的测试，以确保所有核心功能都正常运行。 File it！，Notes和Vault将与Windows，MacOS和基于Linux的系统兼容。

下次更新：
* 制作营销活动。
* 要合并我们正在构建的许可机制并引入收入模型。

![blog-3](/content/images/2018/11/blog-3.jpg)

![blog4](/content/images/2018/11/blog4.jpg)


## ProximaX套件

我们的办公套件基于NextCloud / OnlyOffice。 ProximaX 套件是一个完整的端到端办公应用程序，位于云端，由我们的投石车和DFMS安全基础架构服务提供支持。

您现在可以在以下位置注册并体验ProximaX套件：
https://suite.proximax.io

此版本一次只允许20个并发用户。

下次更新：
* 启动ProximaX 套件的游乐场节点。
* 营销活动，宣传应用程序。
* 探索商业化的机会。
* 包含我们的商业产品。

## 产品上值得注意的更新

以下是我们在应用程序开发分支上的一些值得注意的更新。

带有公证通，文件管理器和投票模块的ProximaX桌面钱包
* ProximaX 区块链浏览器
* ProximaX公证通
* ProximaX ERP - 需要很长的开发周期

这些只是我们正在开发的一些应用程序，我们的团队很快会对这些应用程序进行进展的说明。

## 技术合作伙伴和物联网IoT项目

我们一直在和482.solutions公司构建核心，我们打算与他们建立牢固的关系。除了帮助我们构建平台之外，我们还就构建物联网项目进行了初步讨论。一旦我们得到一些进展，我们就会分享这方面的细节，但简而言之，这个想法是一个基于ProximaX天狼星区块链的智能门锁系统。


![blog5](/content/images/2018/11/blog5.png)

## 开发解决方案 提供支持

我们优秀的团队为以下客户提供解决方案和支持：

### CashCart
CashCart利用我们的ProximaX天狼星私有区块链实例，他们现在在其企业在线购物平台上使用它，该平台拥有自己的去信任和去中心化的奖励系统。通过签署MoA，我们与他们建立了牢固的关系，这是我们在菲律宾取得ProximaX关注度和采用的坚实基础。

![blog6](/content/images/2018/11/blog6.png)

通过CashCart的合作，我们将能够在菲律宾传播更多关于ProximaX技术的知名度。他们将通过其广泛的教学学院进行ProximaX技术培训，以帮助人们学习ProximaX背后的技术，并建立社区以扩展我们在菲律宾的品牌。

### Omniaz

像CashCart一样，Omniaz将会使用我们的ProximaX天狼星区块链实例处理数百万个SKU。我们为他们构建了一个高度自定义的实例，以确保它能够处理他们需要的条目和事务数量，以容纳他们放入系统的数百万个SKU。

![blog7](/content/images/2018/11/blog7.png)

# 总结

十月，我们很高兴核心发展的进展顺利。我们已经开始构建代码以支持存储机制，PoS区块链更改和带宽证明算法用于直播。

以下是我们10月份所做的总结：

* Catapult SDK Go和Swift
* PDP，PoRep和存储组件实施
* 存储生命周期
* ProximaX天狼星PoS同行评审和区块链TESTNET发布准备
* 为客户开发解决方案
* 开始探索潜在的物联网项目机会