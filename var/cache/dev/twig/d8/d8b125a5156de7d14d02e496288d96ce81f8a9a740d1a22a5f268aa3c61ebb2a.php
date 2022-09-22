<?php

/* AdminBundle:CtRole:edit.html.twig */
class __TwigTemplate_f8dde148425a4bdab4ac7c3400d6b37ca001f67ca139d69f9eb83702cfe35e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtRole:edit.html.twig", 1);
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
        $__internal_4560f4a0e6874bacd5607dd815866da82a1993d353da171451417d70c2ba6655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4560f4a0e6874bacd5607dd815866da82a1993d353da171451417d70c2ba6655->enter($__internal_4560f4a0e6874bacd5607dd815866da82a1993d353da171451417d70c2ba6655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:edit.html.twig"));

        $__internal_50359461a34f3557ee323972bfd193174623c36448f433f34b0f6fa7d9081ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50359461a34f3557ee323972bfd193174623c36448f433f34b0f6fa7d9081ae4->enter($__internal_50359461a34f3557ee323972bfd193174623c36448f433f34b0f6fa7d9081ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4560f4a0e6874bacd5607dd815866da82a1993d353da171451417d70c2ba6655->leave($__internal_4560f4a0e6874bacd5607dd815866da82a1993d353da171451417d70c2ba6655_prof);

        
        $__internal_50359461a34f3557ee323972bfd193174623c36448f433f34b0f6fa7d9081ae4->leave($__internal_50359461a34f3557ee323972bfd193174623c36448f433f34b0f6fa7d9081ae4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc49274dd86e4ab2b3590ce5b3c711dd71b2fe3c1c45cb891dd385ff9946cea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc49274dd86e4ab2b3590ce5b3c711dd71b2fe3c1c45cb891dd385ff9946cea7->enter($__internal_bc49274dd86e4ab2b3590ce5b3c711dd71b2fe3c1c45cb891dd385ff9946cea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_914a57195ebd67bfd17e577aaead7aec2ff513b4c01e8120ab97627a1aa771a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914a57195ebd67bfd17e577aaead7aec2ff513b4c01e8120ab97627a1aa771a3->enter($__internal_914a57195ebd67bfd17e577aaead7aec2ff513b4c01e8120ab97627a1aa771a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Catégorie ";
        
        $__internal_914a57195ebd67bfd17e577aaead7aec2ff513b4c01e8120ab97627a1aa771a3->leave($__internal_914a57195ebd67bfd17e577aaead7aec2ff513b4c01e8120ab97627a1aa771a3_prof);

        
        $__internal_bc49274dd86e4ab2b3590ce5b3c711dd71b2fe3c1c45cb891dd385ff9946cea7->leave($__internal_bc49274dd86e4ab2b3590ce5b3c711dd71b2fe3c1c45cb891dd385ff9946cea7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2995c6b59cff4dc9927421e0412b06508c0312134b4fe059101b928fb222afc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2995c6b59cff4dc9927421e0412b06508c0312134b4fe059101b928fb222afc3->enter($__internal_2995c6b59cff4dc9927421e0412b06508c0312134b4fe059101b928fb222afc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df2f027c6516b38dbb09acbca34d411079013a38c80fffb21dd0246617f8ebe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2f027c6516b38dbb09acbca34d411079013a38c80fffb21dd0246617f8ebe4->enter($__internal_df2f027c6516b38dbb09acbca34d411079013a38c80fffb21dd0246617f8ebe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "roleName", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_df2f027c6516b38dbb09acbca34d411079013a38c80fffb21dd0246617f8ebe4->leave($__internal_df2f027c6516b38dbb09acbca34d411079013a38c80fffb21dd0246617f8ebe4_prof);

        
        $__internal_2995c6b59cff4dc9927421e0412b06508c0312134b4fe059101b928fb222afc3->leave($__internal_2995c6b59cff4dc9927421e0412b06508c0312134b4fe059101b928fb222afc3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtRole:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Catégorie {% endblock %}

{% set menu_role        = true %}
{% set menu_role_create = true %}

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
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.roleName) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
                        <a href=\"{{ path('role_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtRole:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtRole/edit.html.twig");
    }
}
