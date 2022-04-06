# Torsten's cltools on /stl/tmp/
Old notes from Torsten's (super) old scripts from 2011-2013 to translate from CLIF to P9 and TPTP.
* requires prolog
* only available on the internal mie stl server

For new revisions of CLIF and no dependence on prolog, use [macleod](https://github.com/thahmann/macleod) instead.

1. go to the `/stl/tmp/cltools/` folder on the MIE network

(You'll either need to do this at your workstation in the lab or you can SSH into your MIE account from home.)

2. In the Terminal, set the PATH variable to this (otherwise the scripts won't run properly):

```bash
setenv PATH /usr/bin:/usr/local/bin/:/stl/tmp/cltools/bin/:/usr/local/prover9-mace4/bin
```

3. Navigate to your folder with the CLIF files (e.g., Downloads):

```bash
cd Downloads
```

4. The command to translate into TPTP should be:
   
```bash
python /stl/tmp/cltools/ColoreProver.py [name of clif file with no extension] -tptp
```
example:
```bash
python /stl/tmp/cltools/ColoreProver.py psl_core -tptp
```

The TPTP translation should be named `psl_core.all.tptp` and is located in a new folder called `/tptp` in the same directory as `psl_core.clif`.