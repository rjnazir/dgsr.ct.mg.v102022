<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2500d1089bf8a3c55cde3d2493e1a3d8339a63cabc0cd714bf9322710fed2b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03238ba143bf93e406bb5b6445308faba2c5a662f9ac1fb6434664af1c3373fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03238ba143bf93e406bb5b6445308faba2c5a662f9ac1fb6434664af1c3373fc->enter($__internal_03238ba143bf93e406bb5b6445308faba2c5a662f9ac1fb6434664af1c3373fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_598642bd63a6fabdfe1fdc41381127be611bf227a9ca9333b23bd888d201a59d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598642bd63a6fabdfe1fdc41381127be611bf227a9ca9333b23bd888d201a59d->enter($__internal_598642bd63a6fabdfe1fdc41381127be611bf227a9ca9333b23bd888d201a59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_03238ba143bf93e406bb5b6445308faba2c5a662f9ac1fb6434664af1c3373fc->leave($__internal_03238ba143bf93e406bb5b6445308faba2c5a662f9ac1fb6434664af1c3373fc_prof);

        
        $__internal_598642bd63a6fabdfe1fdc41381127be611bf227a9ca9333b23bd888d201a59d->leave($__internal_598642bd63a6fabdfe1fdc41381127be611bf227a9ca9333b23bd888d201a59d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
