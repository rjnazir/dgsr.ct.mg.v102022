<?php

/* @Admin/CtTypeAnomalie/edit.html.twig */
class __TwigTemplate_3874800f180dfa71f267f57969c995dd3612118a0a0a56312b9a526eac131377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeAnomalie/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e30ca5e5c4f2cf064d9148c1a3c3782a33a782516cae994aace8032204cb0035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e30ca5e5c4f2cf064d9148c1a3c3782a33a782516cae994aace8032204cb0035->enter($__internal_e30ca5e5c4f2cf064d9148c1a3c3782a33a782516cae994aace8032204cb0035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/edit.html.twig"));

        $__internal_150129bbcf455666fab09d2831a7002381af7bfaad4a12d4ec5f59195b4ab7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150129bbcf455666fab09d2831a7002381af7bfaad4a12d4ec5f59195b4ab7f2->enter($__internal_150129bbcf455666fab09d2831a7002381af7bfaad4a12d4ec5f59195b4ab7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30ca5e5c4f2cf064d9148c1a3c3782a33a782516cae994aace8032204cb0035->leave($__internal_e30ca5e5c4f2cf064d9148c1a3c3782a33a782516cae994aace8032204cb0035_prof);

        
        $__internal_150129bbcf455666fab09d2831a7002381af7bfaad4a12d4ec5f59195b4ab7f2->leave($__internal_150129bbcf455666fab09d2831a7002381af7bfaad4a12d4ec5f59195b4ab7f2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5f7ad7f560efdf2d2031c7a831a29af62b93ec42463b04eb5c8e8a78df0ddc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f7ad7f560efdf2d2031c7a831a29af62b93ec42463b04eb5c8e8a78df0ddc9->enter($__internal_b5f7ad7f560efdf2d2031c7a831a29af62b93ec42463b04eb5c8e8a78df0ddc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56f311b7205737f034fab8f0ce2fc730af53df99d4156170750815a66be12011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f311b7205737f034fab8f0ce2fc730af53df99d4156170750815a66be12011->enter($__internal_56f311b7205737f034fab8f0ce2fc730af53df99d4156170750815a66be12011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type anomalie ";
        
        $__internal_56f311b7205737f034fab8f0ce2fc730af53df99d4156170750815a66be12011->leave($__internal_56f311b7205737f034fab8f0ce2fc730af53df99d4156170750815a66be12011_prof);

        
        $__internal_b5f7ad7f560efdf2d2031c7a831a29af62b93ec42463b04eb5c8e8a78df0ddc9->leave($__internal_b5f7ad7f560efdf2d2031c7a831a29af62b93ec42463b04eb5c8e8a78df0ddc9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c08dffb53d0236f7114893e197f6ae720660527637e76cda026d70994162f88c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08dffb53d0236f7114893e197f6ae720660527637e76cda026d70994162f88c->enter($__internal_c08dffb53d0236f7114893e197f6ae720660527637e76cda026d70994162f88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d02633e3c17752a5e6102a63a9e11599bf511260ab94d0ea6282ee1fa12bd174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02633e3c17752a5e6102a63a9e11599bf511260ab94d0ea6282ee1fa12bd174->enter($__internal_d02633e3c17752a5e6102a63a9e11599bf511260ab94d0ea6282ee1fa12bd174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_anomalie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_d02633e3c17752a5e6102a63a9e11599bf511260ab94d0ea6282ee1fa12bd174->leave($__internal_d02633e3c17752a5e6102a63a9e11599bf511260ab94d0ea6282ee1fa12bd174_prof);

        
        $__internal_c08dffb53d0236f7114893e197f6ae720660527637e76cda026d70994162f88c->leave($__internal_c08dffb53d0236f7114893e197f6ae720660527637e76cda026d70994162f88c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeAnomalie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type anomalie {% endblock %}

{% set menu_anomalie             = true %}
{% set menu_type_anomalie        = true %}
{% set menu_type_anomalie_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeAnomalie/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeAnomalie\\edit.html.twig");
    }
}
