---
title: 'ProximaX 技术博客 - 2018年11月'
published: true
date: '18-12-2018 05:45'
publish_date: '18-12-2018 05:45'
taxonomy:
    category:
        - Tech
    tag:
        - 'tech talks'
image:
    summary:
        enabled: '1'
        file: tech-november.png
    text:
        enabled: '1'
        file: tech-november.png
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

## 我们的团队本月通过推出区块链测试网络和一些支持应用程序继续高效和积极的推动。 我们还在构建存储和流节点组件以及作为生态系统一部分所需的合约。此外，我们现在通过利用执行器节点和ProximaX虚拟机了解到超级合同应如何作为我们平台解决方案的一部分。


# 核心开发

## 区块链层

11月，我们推出了自己的区块链测试网络环境。启动此环境使我们可以在向社区开放时分阶段提交我们的更新，以便进行潜在的参与。每周五我们的更改将持续修补测试网络环境。

在发布后的两周内，我们对投石车服务器和REST API进行了以下更改：

2018年11月23日

![Techblog-nov18-pic1](/content/images/2018/12/Techblog-nov18-pic1.png)

## 区块链浏览器、钱包、拼手气

在我们的测试网推出后不久，我们发布了早期版本的区块链管理器，钱包和拼手气。这些应用程序将由专门的团队定期改进，直到最终可用于beta测试。 随着我们在为主网上线方面而努力进行的这些发布，我们希望鼓励社区站出来参与测试。

以下是应用的链接：

* http://bctestnetexplorer.xpxsirius.io
* http://bctestnetwallet.xpxsirius.io
* http://bctestnetfaucet.xpxsiris.io

社区可以通过我们的公共Trello板提供反馈。每次更新都会释出发布说明的公告

## 存储层

存储层节点现已合并到一个名为“Go-XPX”的包中。这将包括整合接入，接受，选举，合同创建（与区块链集成）和libp2p模块。

![Techblog-nov-pic-2](/content/images/2018/12/Techblog-nov-pic-2.jpg)

我们希望在2019年1月中旬之前发布将与区块链测试网络集成的存储测试网络。除了共识机制之外，存储层将具有所有核心功能。这意味着当我们努力完成信誉系统和PoCA市场/选举过程时，节点选择将基于随机生成。

![Techblog-nov-pic3](/content/images/2018/12/Techblog-nov-pic3.jpg)

除此之外，我们还专门为存储层引入了新合约。这些合约将使用ProximaX天狼星插件构建，以在存储主机节点，选定的验证者和客户端之间创建数字合约义务。

## 流层
我们希望在明年年初推出流层测试网络，并将探索和洋葱路由功能集成到SDK中。

## 关于流角色/节点
所有节点被组织成松散连接的网状网络，其中一些节点与它们的直接邻居连接（虚拟邻域与节点的物理位置无关）。可以通过所有节点中的最小跳数来到达其他节点。 每个节点都维护自己的私钥，并将其公钥作为区块链用户注册表中的公共记录共享。节点应携带至少一个（或多个）可公开访问的端点地址，以允许其他节点和客户端在需要时直接访问节点

## 流的概念-发现服务
从安全角度来看，节点发现过程应独立于任何特定节点（以消除节点提供已知/受损节点列表的可能性）。这可以通过添加由可信赖的合作伙伴管理的多个预定义（预先构建到客户端）节点或通过实现定义节点列表（使用股权证明或重要性证明）的投票方案来实现，从而在下一个固定期限内提供发现。 当前选定的发现节点应该在区块链级别上发布，并且可供客户端随时提取完整列表。 客户端应仅将可信节点用于发现目的（如果可用），并在没有任何公共发现节点可用时切换到任何其他已知节点。 通常，所有节点都应该是可发现的，并且发现机制不应该限制任何客户端（或任何其他节点）接收完整的节点列表。 我们还没有定义发现节点选举过程。

## Streaming - Client registration and presence in the network 流-客户端注册和显露于网络
为了使客户端在系统中建立其存在而不泄露其身份，我们从她的真实入口点对用户存在节点进行模糊处理。 客户端为自己注册一个或多个联系点（我们将这些点称为“显露节点”）。为此，客户端发现网络上的三个独立节点，选择哪个节点成为她的入口节点，哪个节点成为她的存在节点，并使用洋葱式伸缩连接。

![techblog-nov-pic4](/content/images/2018/12/techblog-nov-pic4.png)

在上面的示例中，Alice选择节点A作为入口节点，选择节点C作为其显露节点。最初，Alice匿名连接到节点A，使用节点A的公钥对请求进行签名。然后，该链接用于建立Diffe-Hellman密钥交换，在Alice和A之间创建会话密钥K.在建立安全连接之后，Alice请求节点A代表她扩展连接到达节点B（类似地从注册开始）消息由节点B公钥签名并进一步到达节点C，其中Alice显示她的身份用她自己的私钥签署注册消息（允许节点C使用来自区块链注册表的公钥来验证它）。然后，节点C使用DHT存储机制在指定一些到期时间的同时宣布自己作为Alice在整个节点网络上的存在代表。 Alice可以定期更新显露注册，在该通道上发送保持活动事件。 Alice应该能够为自己注册多个在线端点以实现容错目的，并且发现她的客户端应该能够选择哪些条目是最新的并且能够联系这些节点中的一个或任何节点。

![techblog-nov-pic5](/content/images/2018/12/techblog-nov-pic5.png)

## 超级合约和执行节点
我们已经开始构思超级合同。主要思想是在ProximaX 天狼星区块链上创建一个抽象合同，并使其可扩展以调用“附加”外部过程。 在这种情况下，外部进程是包含可执行代码的ProximaX特定虚拟机。

在启动任何外部过程之前，启动市场选举过程（PoCA）以查找可用于运行数字合约（代码）的任何执行器节点。选择执行程序节点后，它将从存储节点（通过哈希）中提取虚拟机，运行代码并在链上发回状态以进行合同确认。

我们将继续探索这一概念并对其进行改进。

# 技术白皮书
我们需要完成一些白皮书，例如高级技术白皮书，商业白皮书，PoCA论文和代币经济论文。然而，由于不得不推出网络的各个组件，该团队已经陷入困境。

我们希望在1月份之前发表一些这些论文。

# 网站更新
我们的营销团队正在更新ProximaX网站，我们现在正处于完成的最后阶段。 我们很快将通过我们的社交媒体页面单独发布公告。

# 展示
## 482.solutions公司的物联网产品
482.solutions自今年8月以来一直与我们合作。最近，他们在基辅展示了ProximaX的使用，其中adruino设备向ProximaX平台发送遥测数据，其中记录带有时间戳并存储在区块链+存储中。

![Techblog-nov-pic6](/content/images/2018/12/Techblog-nov-pic6.png)

![techblog-nov-pic-7-1](/content/images/2018/12/techblog-nov-pic-7-1.png)

PPT展示链接: https://docs.google.com/presentation/d/14OHfrmbw6Il7-S-6Zkd8BbDmapCaEJKfCkEKDZEEkis/edit#slide=id.g48048a523d_0_11
观看下面的视频

https://www.facebook.com/482.solutions/videos/727007884321072/UzpfSTcxMzY3ODk2MzoxMDE1NjU3MjY0NTgzMzk2NA/

## Omniaz 区块链+物联网
Omniaz在新加坡举办了一场活动，展示了他们的区块链 + 物联网设备Watch 视频如下:
https://www.youtube.com/watch?v=VxfWqgh9IkQ

# 总结
以下是我们在11月所做的总结：

* 继续开发支持核心平台所需的组件，如PDP，PoRep和存储组件实施
* 在应用方面取得了很大进展
* 合作伙伴和客户已开始使用我们的私有产品构建应用程序
* 存储生命周期
* 区块链测试网络启动
* 区块链测试网络拼手气，钱包和区块链浏览器发布
* 为客户开发解决方案
* 物联网项目的主要演示
