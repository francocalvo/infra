filetype plugin indent on " Load plugins according to detected filtype
syntax on


set tabstop=1
set shiftwidth=2
set softtabstop=2
set expandtab
set autoindent
set smarttab
set shiftround

set backspace=indent,eol,start " Make baclspace work as you would expect
set laststatus=2 " always show status line
set showcmd " show already typed keys when more are expected

set splitbelow " open new windows below the current windows
set splitright " open new windows right to the current window

""" Plugins
call plug#begin('~/.vim/plugged') " Specify directory for plugins

" Aesthetics
Plug 'arcticicestudio/nord-vim', { 'branch': 'develop' }

" Markdown plugin
Plug 'godlygeek/tabular'
Plug 'plasticboy/vim-markdown'
call plug#end()

colorscheme nord

