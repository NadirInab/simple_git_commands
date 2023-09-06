# simple_git_commands 👨‍🏫 👨‍💻
===============================
#### In this mini-article, my goal is to try to explain the git stages and the Git commands. Perhaps, at least it might be easier to understand a specific command based where it is used. at the end of the day every developer must get good at git 💯.

--

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


### ===================================================================
## Working directory
#### The actual file's states in the file system, they can be tracked or untracked, they can be changed or deleted.

##  The staging area or INDEX
#### The area where we prepared a set of files for a new version based its changes.

## The HEAD
#### It's the pointer in the current branch, it has the complete repository history.

### Remote Repo 
### In simple words its' just a space provided to share and collaborate your code with the community and frineds . 
![Example Image](https://cdn.hashnode.com/res/hashnode/image/upload/v1644871667728/U8uUkYIQa.png?auto=compress,format&format=webp)

========================================================================>
### Sources
#### [![GIT]]([https://example.com](https://git-scm.com/))
#### [![GIT]]([[https://example.com](https://git-scm.com/](https://git-scm.com/book/en/v2/GitHub-Scripting-GitHub)))
####

========================================================================>
### Conclusion 

We have explored a wide range of Git commands essential for effective version control management and seamless code collaboration. Whether you’re an experienced developer or just starting out, So in order to master git the tricks here to use it.  
