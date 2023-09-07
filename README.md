##
 <h1 align="center">simple_git_commands 👨‍🏫 👨‍💻</h1> 
 
```md

In this mini-article, my goal is to try to explain the git stages and the Git commands.
Perhaps, at least it might be easier to understand a specific command based where it is used.
 at the end of the day every developer must get good at git 💯.
 ```

### History and Facts
- In 2005, Linus Torvalds created Git to address the shortcomings of existing version control systems used for the development of the Linux kernel.
- Git was designed to be a distributed version control system, allowing developers to work on a project independently, even without network access or a central server.
- Git gained popularity within the open-source community due to its speed, scalability, and ability to handle large codebases.

### Good to remember :
- GitHub is a web-based platform that provides hosting for Git repositories and additional collaboration features
 <h2 align="center"> Why Do we use git ?</h2> 

#### Collaboration: 

- Git allows multiple developers to work on the same project simultaneously. It enables them to make changes to the codebase independently and merge their changes seamlessly.

#### Tracking Changes:

- Git tracks changes made to the codebase over time. It creates a snapshot of the code at each commit, allowing developers to view the history of changes and understand how the code has evolved. This helps in identifying and fixing bugs, reverting to previous versions if needed, and maintaining a clear record of development progress.

#### Code Integrity:

- With Git, each developer has their own local copy of the codebase. This means that even if someone makes a mistake or accidentally deletes something, the code can usually be restored from another copy.

#### Open Source Collaboration:

- Git is widely used in open source projects. Learning Git enables you to contribute to open source projects, collaborate with other developers, and leverage third-party libraries and frameworks.
- 
#### Version Control Best Practices:

- Learning Git also introduces you to version control best practices, such as creating branches for new features or bug fixes, merging branches, resolving conflicts, and keeping a clean commit history
  
####

### Getting & Creating Projects

| Command | Description |
| ------- | ----------- |
| `git init` | Initialize a local Git repository |
| `git clone ssh://git@github.com/[username]/[repository-name].git` | Create a local copy of a remote repository |

### Basic Snapshotting

| Command | Description |
| ------- | ----------- |
| `git status` | Check status |
| `git add [file-name.txt]` | Add a file to the staging area |
| `git add -A` | Add all new and changed files to the staging area |
| `git commit -m "[commit message]"` | Commit changes |
| `git rm -r [file-name.txt]` | Remove a file (or folder) |

### Branching & Merging

| Command | Description |
| ------- | ----------- |
| `git branch` | List branches (the asterisk denotes the current branch) |
| `git branch -a` | List all branches (local and remote) |
| `git branch [branch name]` | Create a new branch |
| `git branch -d [branch name]` | Delete a branch |
| `git push origin --delete [branch name]` | Delete a remote branch |
| `git checkout -b [branch name]` | Create a new branch and switch to it |
| `git checkout -b [branch name] origin/[branch name]` | Clone a remote branch and switch to it |
| `git branch -m [old branch name] [new branch name]` | Rename a local branch |
| `git checkout [branch name]` | Switch to a branch |
| `git checkout -` | Switch to the branch last checked out |
| `git checkout -- [file-name.txt]` | Discard changes to a file |
| `git merge [branch name]` | Merge a branch into the active branch |
| `git merge [source branch] [target branch]` | Merge a branch into a target branch |
| `git stash` | Stash changes in a dirty working directory |
| `git stash clear` | Remove all stashed entries |

### Sharing & Updating Projects

| Command | Description |
| ------- | ----------- |
| `git push origin [branch name]` | Push a branch to your remote repository |
| `git push -u origin [branch name]` | Push changes to remote repository (and remember the branch) |
| `git push` | Push changes to remote repository (remembered branch) |
| `git push origin --delete [branch name]` | Delete a remote branch |
| `git pull` | Update local repository to the newest commit |
| `git pull origin [branch name]` | Pull changes from remote repository |
| `git remote add origin ssh://git@github.com/[username]/[repository-name].git` | Add a remote repository |
| `git remote set-url origin ssh://git@github.com/[username]/[repository-name].git` | Set a repository's origin branch to SSH |

### Inspection & Comparison

| Command | Description |
| ------- | ----------- |
| `git log` | View changes |
| `git log --summary` | View changes (detailed) |
| `git log --oneline` | View changes (briefly) |
| `git diff [source branch] [target branch]` | Preview changes before merging |


 <h1 align="center">Git workflow 👨‍💻</h1> 
 
 <h3>Working directory</h3> 
 
```md
The actual file's states in the file system, they can be tracked or untracked, they can be changed or deleted.
```

 <h3>Staging area</h3> 
 
```md
The area where we prepared a set of files for a new version based its changes.
```

<h3>HEAD</h3> 

```md
It's the pointer in the current branch, it has the complete repository history.
```

### <h3>Remote Repo</h3> 

```md
In simple words its' just a space provided to share and collaborate your code with the community and frineds . 
```
![git](https://cdn.hashnode.com/res/hashnode/image/upload/v1644871667728/U8uUkYIQa.png?auto=compress,format&format=webp)

### Sources
- https://git-scm.com/
- https://git-scm.com/book/en/v2/GitHub-Scripting-GitHub
- https://medium.com/@onejohi/git-understanding-the-basics-ba004a20dacc
  
### Versioning (Calver && Smever) 
```md
  Calver ==> Calendar 23-09

  Semver ==> Semantic verisoning 1.0.0 ==> 1.0.1 ==> 1.1.0 
  Backward Compatibilty . 
  Monkey patching
  
```

### Good To Know

```md

  git merge
  git rebase
  git squash
  
```

### Conclusion 
 <p>
   We have explored a wide range of Git commands essential for effective version control management and seamless code collaboration.
   Whether you’re an experienced developer or just starting out, So in order to master git the tricks here to use it.  

</p> 
