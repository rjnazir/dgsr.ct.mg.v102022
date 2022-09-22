<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5e79fe9893c12649dfe9150a92cee32f278c874e8dd687f99aab05f4346940b2 extends Twig_Template
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
        $__internal_ed05efe5ce93c3736e288b84a672f44ab21455eb935bd4b66db86085e4837340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed05efe5ce93c3736e288b84a672f44ab21455eb935bd4b66db86085e4837340->enter($__internal_ed05efe5ce93c3736e288b84a672f44ab21455eb935bd4b66db86085e4837340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_77495ba436950a93ef492bbd6007bf381520ac38bdff17e3865bf2bcc6658402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77495ba436950a93ef492bbd6007bf381520ac38bdff17e3865bf2bcc6658402->enter($__internal_77495ba436950a93ef492bbd6007bf381520ac38bdff17e3865bf2bcc6658402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ed05efe5ce93c3736e288b84a672f44ab21455eb935bd4b66db86085e4837340->leave($__internal_ed05efe5ce93c3736e288b84a672f44ab21455eb935bd4b66db86085e4837340_prof);

        
        $__internal_77495ba436950a93ef492bbd6007bf381520ac38bdff17e3865bf2bcc6658402->leave($__internal_77495ba436950a93ef492bbd6007bf381520ac38bdff17e3865bf2bcc6658402_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
