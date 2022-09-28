<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d4e911cf1a835405a8e1b729b638480fa0f9b7dcc57640c5ede6bc79fa14298c extends Twig_Template
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
        $__internal_9905a4d26dd16109ed820d6c0f1cf5bc65bcc843aeee1ae22a3c99c93a194416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9905a4d26dd16109ed820d6c0f1cf5bc65bcc843aeee1ae22a3c99c93a194416->enter($__internal_9905a4d26dd16109ed820d6c0f1cf5bc65bcc843aeee1ae22a3c99c93a194416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_50f7e436b1869ef2063d1e46ed087de38ac383a8ba90e91f6048bb1000472415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f7e436b1869ef2063d1e46ed087de38ac383a8ba90e91f6048bb1000472415->enter($__internal_50f7e436b1869ef2063d1e46ed087de38ac383a8ba90e91f6048bb1000472415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9905a4d26dd16109ed820d6c0f1cf5bc65bcc843aeee1ae22a3c99c93a194416->leave($__internal_9905a4d26dd16109ed820d6c0f1cf5bc65bcc843aeee1ae22a3c99c93a194416_prof);

        
        $__internal_50f7e436b1869ef2063d1e46ed087de38ac383a8ba90e91f6048bb1000472415->leave($__internal_50f7e436b1869ef2063d1e46ed087de38ac383a8ba90e91f6048bb1000472415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
