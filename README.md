# Enterprise IT Infrastructure & Active Directory Simulation

## Project Overview
This repository contains the configuration files, custom scripts, and full documentation for a simulated corporate IT environment designed for a fictional consulting firm, Tecton Kft. The project demonstrates the complete design, implementation, and management of a centralized Linux-based server infrastructure hosted on Microsoft Azure.

The architecture eliminates decentralized management by integrating File Sharing, Web Hosting, Network Printing, and Corporate Email under a single **Samba Active Directory Domain Controller**.

## Technologies & Stack
* **Cloud Platform:** Microsoft Azure (Virtual Networks, VMs, NSG Firewalls)
* **Server OS:** Ubuntu Server 24.04 LTS (File/Web) and Ubuntu 22.04 LTS (Mail)
* **Client OS:** Windows 10 Enterprise
* **Domain Controller:** Samba AD DC (Domain: tecton.local)
* **Mail Server:** Zimbra Collaboration 10
* **Web Server:** Apache2 + PHP (HTTP/HTTPS)
* **Print Server:** CUPS (Virtual PDF Printer)

## Repository Structure
* `/Configs` - Raw configuration files for the core services (e.g., `smb.conf`, `000-default.conf`, `cups-pdf.conf`) demonstrating Infrastructure as Code principles.
* `/Web` - HTML, CSS, and PHP source code for the corporate intranet and interactive web applications.
* `/Scripts` - Custom bash automation scripts, including `backup.sh`, which is scheduled via cron to automate daily web directory and Samba share backups.
* `/Backups` - Compressed `.tar.gz` archives of the full server states and Samba AD databases for disaster recovery purposes.
* `/Docs` - **[Highly Recommended]** The comprehensive 48-page technical documentation and testing protocol detailing the network topology, server specs, and system tests.

## Key Features Implemented
1. **Centralized Identity Management:** Provisioned users, groups, and OU hierarchies via Samba AD DC for an 8-person organization.
2. **Role-Based Access Control (RBAC):** Configured secure department network shares (Közös, Pénzügy, Stratégiai) with strict NTFS/Samba ACL permissions.
3. **Group Policy Objects (GPO):** Applied automated network drive mapping directly to Windows clients upon login.
4. **Corporate Web & Mail Integration:** Deployed an Apache web server with self-signed SSL certificates and a fully functional Zimbra Mail Server with DNS MX record integration.
5. **Automated Backups:** Developed a robust bash script (`backup.sh`) to automatically compress and store critical server data using cron jobs.

## Project Team & Responsibilities
* **Pór Levente Ferenc** (Me)
  * Active Directory (Samba AD DC) deployment and centralized user/group management.
  * File server configuration with Role-Based Access Control (RBAC) for restricted and shared folders.
  * Windows client domain integration and automated network drive mapping via GPO.

* **Cseri Nóra**
  * Mail Server (Zimbra) deployment, configuration, and mailbox/mailing list provisioning.
  * Remote management infrastructure setup (SSH, Webmin).
  * Client-side application rollout (Thunderbird mail client, office tools).

* **Osvald Ábel Tamás**
  * Web Server (Apache) setup with HTTPS implementation.
  * Corporate website and interactive PHP Webapp development.
  * Bash scripting and cron job scheduling for automated data backups (Web and File Share).
