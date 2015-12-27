1. 请写出你当前的内网ip以及外网ip(如果有), 子网掩码, 当前网关ip
ip:172.27.176.8 子网掩码：255.255.0.0  默认网关:172.27.176.1
2. 请写出你当前的DNS服务器, 学校的DNS服务器, DNS服务器作用

3. TCP与UDP的区别
TCP（Transmission Control Protocol，传输控制协议）是基于连接的协议，也就是说，在正式收发数据前

，必须和对方建立可靠的连接。一个TCP连接必须要经过三次“对话”才能建立起来，其中的过程非常复杂

，我们这里只做简单、形象的介绍，你只要做到能够理解这个过程即可。我们来看看这三次对话的简单过程

：主机A向主机B发出连接请求数据包：“我想给你发数据，可以吗？”，这是第一次对话；主机B向主机A发

送同意连接和要求同步（同步就是两台主机一个在发送，一个在接收，协调工作）的数据包：“可以，你什

么时候发？”，这是第二次对话；主机A再发出一个数据包确认主机B的要求同步：“我现在就发，你接着吧

！”，这是第三次对话。三次“对话”的目的是使数据包的发送和接收同步，经过三次“对话”之后，主机

A才向主机B正式发送数据。 

UDP（User Data Protocol，用户数据报协议）是与TCP相对应的协议。它是面向非连接的协议，它不与对方

建立连接，而是直接就把数据包发送过去！ 
  UDP适用于一次只传送少量数据、对可靠性要求不高的应用环境。比如，我们经常使用“ping”命令来测

试两台主机之间TCP/IP通信是否正常，其实“ping”命令的原理就是向对方主机发送UDP数据包，然后对方

主机确认收到数据包，如果数据包是否到达的消息及时反馈回来，那么网络就是通的。例如，在默认状态下

，一次“ping”操作发送4个数据包（如图2所示）。大家可以看到，发送的数据包数量是4包，收到的也是4

包（因为对方主机收到后会发回一个确认收到的数据包）。这充分说明了UDP协议是面向非连接的协议，没

有建立连接的过程。正因为UDP协议没有连接的过程，所以它的通信效果高；但也正因为如此，它的可靠性

不如TCP协议高。QQ就使用UDP发消息，因此有时会出现收不到消息的情况。 

tcp协议和udp协议的差别 
TCP 面向连接，传输性可靠 ，传输大量数据，速度慢，
UDP，面向非连接 ，不可靠，传输少量数据 速度快。

4.ip协议和ip区别
IP地址是指网络中计算机通讯时的地址，TCP/IP协议是指计算机通讯是采用一种相同规范的规则。
就好像你和我就是两个IP地址，我们处在不同的城市，但是如果我们要通讯，就要通过相同的协议，例如说

话，就要讲相同的语言，否则我们是无法通讯的。实际上TCP/IP这个不是单独指两个协议，而是一组协议栈

，也就是多个协议的集合。

5. 简述TCP/IP模型和OSI参考模型

6. http/https协议的区别, ws/wss协议的区别

7. 进程和线程的区别
进程是具有一定独立功能的程序关于某个数据集合上的一次运行活动,进程是系统进行资源分配和调度的一

个独立单位。
线程是进程的一个实体, 是CPU调度和分派的基本单位,它是比进程更小的能独立运行的基本单位.线程自己

基本上不拥有系统资源,只拥有一点在运行中必不可少的资源(如程序计数器,一组寄存器和栈),但是它可与

同属一个进程的其他的线程共享进程所拥有的全部资源。
一个线程可以创建和撤销另一个线程，同一个进程中的多个线程之间可以并发执行。
进程和线程的主要差别在于它们是不同的操作系统资源管理方式。进程有独立的地址空间，一个进程崩溃后

，在保护模式下不会对其它进程产生影响，而线程只是一个进程中的不同执行路径。线程有自己的堆栈和局

部变量，但线程之间没有单独的地址空间，一个线程死掉就等于整个进程死掉，所以多进程的程序要比多线

程的程序 健壮，但在进程切换时，耗费资源较大，效率要差一些。但对于一些要求同时进行并且又要共享

某些变量的并发操作，只能用线程，不能用进程。

8. 多个进程并发执行是如何实现的

9. UNIX和Linux和Windows的区别
Linux是免费提供源码，爱好者可以按照自己的需要自由修改、复制和发布程序的源码，并公布在Internet

上,吸引了世界各地的操作系统高手为Linux编写各种各样的驱动程序和应用软件，使得Linux成为一种不仅

只是一个内核，而且包括系统管理工具、完整的开发环境和开发工具、应用软件在内，用户很容易获得的操

作系统。 
由于可以得到Linux的源码，所以操作系统的内部逻辑可见，这样就可以准确地查明故障原因，及时采取相

应对策。在必要的情况下，用户可以及时地为Linux打 “补丁”（这正是笔者前面文章中讨论的集市模式开

发软件最本质的内容），这是其它操作系统所没有的优势。同时，这也使得用户容易根据操作系统的特点构

建安全保障系统，不会由于不了解不公开源码的 “黑盒子”式的系统预留的什么 “后门”而受到意外的打

击。 
第二，究其根本，Linux是一个UNIX系统变种，因此也就具有了Unix系统的一系列优良特性，Unix上的应用

可以很方便地移植到Linux平台上，这使得Unix用户很容易掌握Linux。下面简要地描述UNIX以及Linux的一

系列特色。 

2.1 UNIX/Linux的主要特色 
早期UNIX的主要特色是结构简炼、便于移植和功能相对强大，经过30来年的发展和进化，形成了一些极为重

要并稳定的特色，其中主要包括： 
1. 技术成熟，可靠性高 
经过30来年开放式道路的发展，UNIX的一些基本技术已变得十分成熟，有的已成为各类操作系统的常用技术

。实践表明，UNIX是能达到大型主机（mainframe）可靠性要求的少数操作系统之一。目前许多UNIX大型主

机和服务器在国外的大型企业中每天24小时，每年365天不间断地运行。例如，不少大企业或政府部门，即

所谓肩负关键使命的场合/部门将其整个企业/部门信息系统建立并运行在以UNIX为主服务器的

Client/Server结构上。但到目前为止，世界上还没有一家大型企业将其重要的信息系统完全建立在NT上。 
2. 极强的可伸缩性 
UNIX系统是世界上唯一能在笔记本电脑、PC、工作站，直至巨型机上运行的操作系统，而且能在所有主要

CPU芯片搭建的体系结构上运行（包括Intel/AMD及HP-PA、MIPS、PowerPC、UltraSPARC、ALPHA等RISC芯片

）。至今为止，世界上没有第二个操作系统能达到这一点。此外，由于UNIX系统能很好地支持SMP、MPP和

Cluster等技术，使其可伸缩性又有了很大的增强。目前，商品化UNIX系统能支持的SMP，CPU数已达到几百

甚至更多个，MPP系统中的节点甚至已超过1024个UNIX支持的异种平台Cluster技术也已投入使用。UNIX的伸

缩性远远超过了NT操作系统目前所能达到的水平 
3. 网络功能强 
网络功能是UNIX系统的一又一重要特色，作为Internet网技术和异种机连接重要手段的TCP/IP协议就是在

UNIX上开发和发展起来的。TCP/IP是所有UNIX系统不可分割的组成部分。因此，UNIX服务器在Internet服务

器中占80％以上，占绝对优势。此外，UNIX还支持所有常用的网络通信协议，包括NFS、DCE、IPX/SPX、

SLIP、PPP等，使得UNIX系统能方便地与已有的主机系统，以及各种广域网和局域网相连接，这也是UNIX具

有出色的互操作性（Interoperability）的根本原因。 
4. 强大的数据库支持能力 
由于UNIX具有强大的支持数据库的能力和良好的开发环境，因此多年来，所有主要数据库厂商，包括Oracle

、Informix、Sybase、Progress等，都把UNIX作为主要的数据库开发和运行平台，并创造出一个又一个性价

比的新记录。UNIX服务器正在成为大型企业数据中心替代大型主机的主要平台。 
5. 开发功能强 
UNIX系统从一开始就为软件开发人员提供了丰富的开发工具。成为工程工作站的首选和主要的操作系统和开

发环境。可以说，工程工作站的出现和成长与UNIX是分不开的。至今为止，UNIX工作站仍是软件开发厂商和

工程研究设计部门的主要工作平台。有重大意义的软件新技术的出现几乎都在UNIX上，如TCP/IP、WWW、

OODBMS等。 
6. 开放性好 
开放性是UNIX最重要的本质特性。开放系统概念的形成与UNIX是密不可分的。UNIX是开放系统的先驱和代表

。由于开放系统深入人心，几乎所厂商都宣称自己的产品是开放系统，确实每一种系统都能满足某种开放的

特性，如可移植性、可兼容性、可伸缩性、互操作性等。但所有这些系统与开放系统的本质特征—不受某些

厂商的垄断和控制相去甚远，只有UNIX完全符合这一条件。 
7. 标准化 
过去，Unix界被分析家和用户批判，因为没有为所有Unix操作系统提供统一的标准。其实，到目前为止，国

际标准化组织（ISO）、工业团体恰恰是以UNIX基础制订了一系列标准化，如ISO/IEC的POSIX标准、IEEE 

POSIX标准、X/Open组织的XPG3/4工业标准以及后来的Spec 1170(因为它包含了1170个应用编程接口，后来

改名为UNIX’95)标准。不少人对标准及标准化组织的作用及职权产生了误解。事实上，当标准化组织企图

驾驭互相竞争的力量，和企图为用户规定他们的要求时是注定要失败的。比方说，标准只能用于给出道路的

规则，而不应用于制造汽车。如果厂家被强迫完全遵从单一的标准，而不允许他们产品有特色，则用户将受

害，Unix将变成象任何单一厂家的产品一样，没有任何特色。

Linux和Windows XX相比有何特点 
1. 可完全免费得到 
Linux操作系统可以从互联网上免费下载使用，只要您有快速的网络连接就行；而且，Linux上跑的绝大多数

应用程序也是免费可得的。用了Linux就再也不用背”使用盗版软件”的黑锅了。 
2. 可以运行在386以上及各种RISC体系结构机器上 
Linux最早诞生于微机环境，一系列版本都充分利用了X86CPU的任务切换能力，使X86CPU的效能发挥得淋淋

尽致，而这一点连Windows都没有做到。此外，它可以很好地运行在由各种主流RISC芯片（ALPHA、MIPS、

PowerPC、UltraSPARC、HP-PA等）搭建的机器上。 
3. Linux是UNIX的完整实现 
从发展的背景看，Linux与其他操作系统的区别是，Linux是从一个比较成熟的操作系统发展而来的，而其他

操作系统，如WindowsNT等，都是自成体系，无对应的相依托的操作系统。这一区别使得Linux的用户能大大

地从Unix团体贡献中获利。无论是Unix的作者还是Unix的用户，都认为只有Unix才是一个真正的操作系统，

许多计算机系统（从个人计算机到超级计算机）都存在Unix版本，Unix的用户可以从很多方面得到支持和帮

助。因此，Linux作为Unix的一个克隆，同样会得到相应的支持和帮助，直接拥有Unix在用户中建立的牢固

的地位。 
UNIX上的绝大多数命令都可以在Linux里找到并有所加强。UNIX的可靠性、稳定性以及强大的网络功能也在

Linux身上一一体现。 
4. 真正的多任务多用户 
只有很少的操作系统能提供真正的多任务能力，尽管许多操作系统声明支持多任务，但并不完全准确，如

Windows。而Linux则充分利用了X86CPU的任务切换机制，实现了真正多任务、多用户环境，允许多个用户同

时执行不同的程序，并且可以给紧急任务以较高的优先级。 
5. 完全符合POSIX标准 
POSIX是基于UNIX的第一个操作系统簇国际标准，Linux遵循这一标准这使UNIX下许多应用程序可以很容易地

移植到Linux下，相反也是这样。 
6. 具有图形用户界面 
Linux的图形用户界面是Xwindow系统。Xwindow可以做MSWindows下的所有事情，而且更有趣、更丰富，用户

甚至可以在几种不同风格的窗口之间来回切换。 
7. 具有强大的网络功能 
实际上，Linux就是依靠互联网才迅速发展了起来，Linux具有强大的网络功能也是自然而然的事情。它可以

轻松地与TCP/IP、LANManager、Windows for Workgroups、Novell Netware或Windows NT网络集成在一起，

还可以通过以太网或调制解调器连接到Internet上。 
Linux不仅能够作为网络工作站使用，更可以胜任各类服务器，如X应用服务器、文件服务器、打印服务器、

邮件服务器、新闻服务器等等。 
8. 是完整的UNIX开发平台 
Linux支持一系列的UNIX开发工上，几乎所有的主流程序设计语言都已移植到Linux上并可免费得到，如C、

C++、Fortran77、ADA、PASCAL、Modual2和3、Tcl/TkScheme、SmallTalk/X等。 
总而言之，Unix就是可供各种用户选择的对象。一个操作系统已经使分布式计算成为现实。一个操作系统正

在使新形式的交互娱乐成为现实并正确领导通向新的工程和商业应用的路。这就是Unix所体现的精神。但

Unix还不止于此。主要地，Unix给用户选择最佳应用、最佳开发环境、最佳网络功能和最佳硬件的自由，以

满足用户的业务要求。Unix还给用户选择何时升级系统的自由，甚至当用户改变主意时，用户可以以最少的

痛苦来安装一个新系统，只要业务需要。 
Unix专门献身于使用户保持选择的权力。 
用硬盘安装LINUX操作系统方法：
1.用虚拟机装 
2.改写启动系统文件，添加LINUX体统文件，网上搜搜，很多资料的。 
3.用虚拟光驱打开ISO，点击里面的安装程序

10. Linux的各个发行版以及各个发行版的主要特点
1.  Redhat
Redhat linux是全球在服务器上应用最广泛的linux操作系统，在效率、扩展性、可靠性、安全性、集成虚

拟化等都具备领先其他linux的特点，被誉为最值得信赖的数据中心平台系统，其主要应用在服务器领域。

Redhat也有两个产品系列，即桌面版Fedora Core系列和收费的Enterprise系列，又可以简称为：RHEL。又

由于其价格昂贵等因素使很多的中小型企业望尘莫及，一般标准配置（服务），服务1年的2个CPU的价格在

美国是1999美元，在国内大概卖15000左右。

Redhat最新的服务器版本是：6.2，默认的文件系统是ext4，自带linux 2.6.32内核，。

2.  CentOS
CentOS（Community ENTerprise Operating System），它是来自Red Hat Enterprise Linux依照开放源代

码规进行重新编译而成的，并且仅仅是将logo标识替换掉。所以也可以说CentOS是redhat服务器的免费版。
新版的CentOS大约每两年发布一次，每个版本大概每6个月更新一次，CentOS也提供技术支持，但仅限于社

区的官方邮件、论坛和聊天室，并且CentOS不负任何商业责任。CentOS提供独有的yum命令支持在线安装应

用、升级和更新系统，所以使用起来非常的方便.CentOS目前最新版本是：6.2。

3.  SUSE
SUSE包含了一个安装及系统管理工具YaST2。它能够进行磁盘分割、系统安装、在线更新、网络及防火墙组

态设定、用户管理和其他更多的工作。它为原来复杂的设定工作提供了方便的组合界面。尤其被称之为最漂

亮的linux服务器。OpenSUSE是Suse的开源项目，对个人来讲是完全免费的，并可以在线升级，并兼容桌面

和服务器。在服务器领域openSUSE在功能、性能、安全性等方面与SUSE是一样的，且openSUSE的版本要比

SUSE的版本快，在官方的技术支持上也需要购买。在可靠性和稳定性上要比SUSE差一些，因为openSUSE很少

用于生产环境。SUSE linux目前的最新版本是： 11.4。OpenSUSE的最新版本为：12.1，它引入了

linux3.1.0的内核，Xen4.1虚拟化系统，并支持amazon EC2、Eucalptus、openstack等云平台。

4.  Ubuntu
Ubuntu最初是一个以桌面应用为主的linux操作系统，但目前有桌面和服务器的版本，一般每六个月发布一

次版本。使用Ubuntu主要有两大优势，其一：庞大而活跃的开发社区；其二：随时更新的软件库。根据国内

2年多的实际运行经验，Ubuntu服务器版本的运行极为稳定，安全可靠，完善的管理工具能极大的降低了维

护成本，并对LAMP的架构支持的非常，特别适合中小企业。尤其其开放和强大功能的缘故，很多先进的技术

与产品都纷纷率先推出Ubuntu的版本，象openstack。Ubuntu目前最新版本为：12.04，该版本包含最新代号

为Essex的openstack版本，以及一项名为MAAS的新特性。此外，可使用juju轻松部署集中式Charmstore，还

包括一项AWSOME的新技术。这些技术将 Ubuntu Server 定位为最佳的可伸缩计算的服务器操作系统。该版

本还将linux内核更新到3.2.14，包含Xen虚拟化工具等等，可谓之功能强大。

11. 常用shell种类
ash、bash、ksh、csh、zsh、zch

12. 本条shell命令的作用export PATH="/usr/local/sbin:$PATH"

14. swap区存在的意义
Swap的调整对Linux服务器，特别是Web服务器的性能至关重要。通过调整Swap，有时可以越过系统性能瓶颈

，节省系统升级费用。Swap空间的作用可简单描述为：当系统的物理内存不够用的时候，就需要将物理内存

中的一部分空间释放出来，以供当前运行的程序使用。那些被释放的空间可能来自一些很长时间没有什么操

作的程序，这些被释放的空间被临时保存到Swap空间中，等到那些程序要运行时，再从Swap中恢复保存的数

据到内存中。这样，系统总是在物理内存不够时，才进行Swap交换。有的程序会打开一些文件，对文件进行

读写，当需要将这些程序的内存空间交换出去时，就没有必要将文件部分的数据放到Swap空间中了，而可以

直接将其放到文件里去。如果是读文件操作，那么内存数据被直接释放，不需要交换出来，因为下次需要时

，可直接从文件系统恢复；如果是写文件，只需要将变化的数据保存到文件中，以便恢复。但是那些用

malloc和new函数生成的对象的数据则不同，它们需要Swap空间，因为它们在
文件系统中没有相应的“储备”文件，因此被称作“匿名”(Anonymous)内存数据。这类数据还包括堆栈中

的一些状态和变量数据等。所以说，Swap空间是“匿名”数据的交换空间。  

15. 操作系统一共有多少端口

16. vim里剪切复制粘贴命令是什么
dd：剪切当前行
ndd：n表示大于1的数字，剪切n行
dw：从光标处剪切至一个单子/单词的末尾，包括空格
de：从光标处剪切至一个单子/单词的末尾，不包括空格
d$：从当前光标剪切到行末
d0：从当前光标位置（不包括光标位置）剪切之行首
d3l：从光标位置（包括光标位置）向右剪切3个字符
d5G：将当前行（包括当前行）至第5行（不包括它）剪切
d3B：从当前光标位置（不包括光标位置）反向剪切3个单词
dH：剪切从当前行至所显示屏幕顶行的全部行
dM：剪切从当前行至命令M所指定行的全部行
dL：剪切从当前行至所显示屏幕底的全部行
yy：复制当前行
nyy：n表示大于1的数字，复制n行
yw：从光标处复制至一个单子/单词的末尾，包括空格
ye：从光标处复制至一个单子/单词的末尾，不包括空格
y$：从当前光标复制到行末
y0：从当前光标位置（不包括光标位置）复制之行首
y3l：从光标位置（包括光标位置）向右复制3个字符
y5G：将当前行（包括当前行）至第5行（不包括它）复制
y3B：从当前光标位置（不包括光标位置）反向复制3个单词

17. 什么是SQL注入
，就是通过把SQL命令插入到Web表单提交或输入域名或页面请求的查询字符串，最终达到欺骗服务器执行恶

意的SQL命令。具体来说，它是利用现有应用程序，将（恶意）的SQL命令注入到后台数据库引擎执行的能力

，它可以通过在Web表单中输入（恶意）SQL语句得到一个存在安全漏洞的网站上的数据库，而不是按照设计

者意图去执行SQL语句。[1]  比如先前的很多影视网站泄露VIP会员密码大多就是通过WEB表单递交查询字符

暴出的，这类表单特别容易受到SQL注入式攻击

18. 什么是XSS
XSS又叫CSS (Cross Site Script) ，跨站脚本攻击。它指的是恶意攻击者往Web页面里插入恶意html代码，

当用户浏览该页之时，嵌入其中Web里面的html代码会被执行，从而达到恶意用户的特殊目的。XSS属于被动

式的攻击，因为其被动且不好利用，所以许多人常呼略其危害性。

19. 什么是NoSQL

20. 本题答案请在回答ReadMe.md文件内, 使用markdown语法
