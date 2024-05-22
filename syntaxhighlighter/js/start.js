function getBrushNameByCode(code) {
    switch (code) {
        case 'bash':
            return 'Bash (Shell)';
        case 'css':
            return 'CSS'
        case 'cpp':
            return 'C++'
        case 'csharp':
            return 'C#'
        case 'delphi':
            return 'Delphi'
        case 'html':
            return 'HTML'
        case 'java':
            return 'Java'
        case 'jscript':
            return 'JavaScript'
        case 'perl':
            return 'Perl'
        case 'php':
            return 'PHP'
        case 'python':
            return 'Python'
        case 'ruby':
            return 'Ruby'
        case 'scss':
            return 'Saas/Scss'
        case 'sql':
            return 'SQL'
        case 'ts':
            return 'TypeScript'
        case 'xml':
            return 'XML/XHTML'
    }
    return '';
}

async function writeClipboardText(text) {
    //try {
        await navigator.clipboard.writeText(text);
    //} catch (error) {
        //await Promise.reject(error);
    //}
}

function copiedMessage(message, toolbar) {
    let oldItems = toolbar.querySelectorAll('.syntaxhighlighter-copied');
    oldItems.forEach((oldItem) => {
        oldItem.remove();
    });

    let copied = document.createElement('span');
    copied.classList.add('syntaxhighlighter-copied');
    copied.innerHTML = message;
    toolbar.prepend(copied);
    setTimeout(() => {
        copied.style.opacity = '0';
    }, 1000);
    setTimeout(() => {
        copied.remove();
    }, 2000);
}

codeBlocks.forEach((codeBlock, currentIndex, listObj) => {
    let blockClass = '';
    for (let className of codeBlock.classList) {
        if (className.includes('brush') || className.includes('toolbar')) {
            blockClass = className;
            break;
        }
    }
    if (blockClass === '') {
        return;
    }

    const container = document.createElement('div');
    container.classList.add('syntaxhighlighter-container');
    container.classList.add('theme-' + shPrepareConfig.theme);
    let hasToolbar = true;
    let brushName = '';

    let parts = blockClass.split(';')
    parts.forEach((item, index, array) => {
        if (item === '') {
            return;
        }
        let itemParts = item.split(':');
        switch (itemParts[0]) {
            case 'brush':
                container.classList.add(itemParts[1]);
                brushName = getBrushNameByCode(itemParts[1]);
                break;

            case 'toolbar':
                if (itemParts[1] === 'false')
                    hasToolbar = false;
                break;
        }
    });

    if (!hasToolbar) {
        return;
    }

    const toolbar = document.createElement('div'); // Сюда имя кисти и кнопку копировать
    toolbar.classList.add('syntaxhighlighter-toolbar');

    if (brushName !== '') {
        const brushEl = document.createElement('span');
        brushEl.classList.add('syntaxhighlighter-brush');
        brushEl.innerHTML = brushName;
        toolbar.append(brushEl);
    }

    let sourceCode = codeBlock.innerHTML;
    sourceCode = sourceCode.replace(/&nbsp;/g, ' ');
    sourceCode = sourceCode.replace(/&lt;/g , "<");
    sourceCode = sourceCode.replace(/&gt;/g , ">");
    sourceCode = sourceCode.replace(/&quot;/g , "\"");
    sourceCode = sourceCode.replace(/&#39;/g , "\'");
    sourceCode = sourceCode.replace(/&amp;/g , "&");

    if (navigator.clipboard !== undefined) {
        const copyBtn = document.createElement('button');
        copyBtn.classList.add('syntaxhighlighter-copy-to-clipboard');
        toolbar.append(copyBtn);
        copyBtn.addEventListener('click', () => {
            navigator.clipboard.writeText(sourceCode)
                .then((result) => {
                    copiedMessage('Copied', toolbar);
                })
                .catch((e) => {
                    copiedMessage('Error', toolbar);
                    //console.log("There has been a problem with your fetch operation: " + e.message,);
                });
        });
    }
    container.append(toolbar);

    // const clear = document.createElement('div');
    // clear.style.clear = 'both';
    // clear.style.height = '1px';
    //container.append(clear);

    const parent = codeBlock.parentNode;
    parent.replaceChild(container, codeBlock);
    container.append(codeBlock);
});

// load main script
let shScript = document.createElement('script');
shScript.async = true;
shScript.src = shPrepareConfig.coreScript;
document.body.appendChild(shScript);