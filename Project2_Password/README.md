# Project 2 - Password Cracking using John the Ripper

## Objective
To understand how hashed passwords can be cracked using dictionary attacks.

## Tools Used
- John the Ripper
- Kali Linux
- rockyou.txt wordlist

## Lab Setup
- Attacker Machine: Kali Linux
- Target: Simulated password hash
- Environment: Virtual Machine (VMware)

## Methodology

1. Created a password hash using MD5:
 printf "berry123" | md5sum

2. Saved the hash into a file:
 echo "62190c24a0a68fda9e2a15bd5987e9fa" > hash.txt

3. Ran John the Ripper with a wordlist:
   john --format=raw-md5 hash.txt --wordlist=/usr/share/wordlists/rockyou.txt

4. Displayed the cracked password:
   john --show --format=raw-md5 hash.txt

## Result
- Password successfully cracked: **berry123**

## Key Learning
- Hashing is not encryption and can be reversed using attacks.
- Wordlist plays a crucial role in cracking success.
- Even simple passwords are highly vulnerable.

## Conclusion

This project demonstrated how weak passwords can be easily cracked using dictionary attacks. It highlights the importance of using strong and complex passwords in real-world systems.
