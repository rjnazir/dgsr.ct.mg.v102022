<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f6301480ecb664246c94bbb95f82f1642c4e4bdb039577ac82144947d48b500a extends Twig_Template
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
        $__internal_111a3d2874703de13bb3ffb693a09b7d34c4ceff6647feaec12bd420cf4f2d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111a3d2874703de13bb3ffb693a09b7d34c4ceff6647feaec12bd420cf4f2d6e->enter($__internal_111a3d2874703de13bb3ffb693a09b7d34c4ceff6647feaec12bd420cf4f2d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4faf443b9afd6bcdf7fc3ad981091d757cc9174d40792a3b582a0bf08a178976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faf443b9afd6bcdf7fc3ad981091d757cc9174d40792a3b582a0bf08a178976->enter($__internal_4faf443b9afd6bcdf7fc3ad981091d757cc9174d40792a3b582a0bf08a178976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_111a3d2874703de13bb3ffb693a09b7d34c4ceff6647feaec12bd420cf4f2d6e->leave($__internal_111a3d2874703de13bb3ffb693a09b7d34c4ceff6647feaec12bd420cf4f2d6e_prof);

        
        $__internal_4faf443b9afd6bcdf7fc3ad981091d757cc9174d40792a3b582a0bf08a178976->leave($__internal_4faf443b9afd6bcdf7fc3ad981091d757cc9174d40792a3b582a0bf08a178976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\laragon\\www\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
