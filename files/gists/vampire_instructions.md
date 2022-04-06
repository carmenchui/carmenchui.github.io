# Using Vampire

1. download/clone the repository in Github:
[https://github.com/vprover/vampire](https://github.com/vprover/vampire)

2. navigate to the vampire folder

3. to compile the release version:
```bash
make vampire_rel
```
4. some warnings might pop up in the terminal, but it should be ok as long as they're not errors

5. to run it, just type to check the version command:
```bash
./vampire_rel_master3926 --version
(the number 3926 is the number appended to the compiled version of vampire)
```

Vampire Competition Mode:
```bash
vampire  --mode casc --proof on -t 60 codi.all.tptp

"--mode casc" forces Vampire CADE ATP System Competition mode (I haven't tried the other modes)
"--proof on" prints out the proof output in the Terminal
"-t 60" is the time limit (60 seconds)

codi.all.tptp is saved in my home folder (/stl/cchui/)
```