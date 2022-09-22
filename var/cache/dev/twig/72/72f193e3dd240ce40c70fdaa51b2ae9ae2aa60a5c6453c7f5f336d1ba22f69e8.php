<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4aa90122de5189fa5d1802e282f451cd4cc102373b07a6ce59647a07d70def54 extends Twig_Template
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
        $__internal_51da754298b9365cdb1bf27d925d9a7222ba9bbf9faa03d1cc29fb53e8e6f6f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51da754298b9365cdb1bf27d925d9a7222ba9bbf9faa03d1cc29fb53e8e6f6f8->enter($__internal_51da754298b9365cdb1bf27d925d9a7222ba9bbf9faa03d1cc29fb53e8e6f6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f261a724598189aad99f5f527e7f4204964d4d84d50737d62dc353ca688d1340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f261a724598189aad99f5f527e7f4204964d4d84d50737d62dc353ca688d1340->enter($__internal_f261a724598189aad99f5f527e7f4204964d4d84d50737d62dc353ca688d1340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_51da754298b9365cdb1bf27d925d9a7222ba9bbf9faa03d1cc29fb53e8e6f6f8->leave($__internal_51da754298b9365cdb1bf27d925d9a7222ba9bbf9faa03d1cc29fb53e8e6f6f8_prof);

        
        $__internal_f261a724598189aad99f5f527e7f4204964d4d84d50737d62dc353ca688d1340->leave($__internal_f261a724598189aad99f5f527e7f4204964d4d84d50737d62dc353ca688d1340_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
